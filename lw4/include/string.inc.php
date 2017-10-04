<?php
header('Content-Type: text/plain; charset=UTF-8');

function last($str) 
{
    $str = str_split($str);  //substr
    return end($str); 
}

function withoutLast($str)
{
    $str = substr($str, 0, -1);
    return $str;
}

function reverse($str)
{
    $outputString = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $outputString = $outputString . $str[strlen($str) - $i - 1];
    }
    return $outputString;
}

function removeExtraBlanks($text)
{
    $text = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);
   // $text = urlencode($text);
    $outputString = "";
    $flagExtraBlank = 0;
    for ($i = 0; $i < count($text); $i++) {
        if ($text[$i] != " ") {
            (($flagExtraBlank == 1) && (! empty($outputString))) ? $outputString = $outputString . " " : null;
            $outputString = $outputString . $text[$i];
            $flagExtraBlank = 0;
        } else {
            $flagExtraBlank = 1;
        } 
    }
    return $outputString;
}

function checkPasswordStrength($password)
{
    if (preg_match('/^[a-zA-Z0-9]{0,}$/', $password)) {
        $passwordStrength = 0;
        $passwordStrength = $passwordStrength + strlen($password) * 4;
        $passwordStrength = $passwordStrength + strlen(preg_replace('/\D/', "", $password)) * 4;
        
        $countUpperCase = 0;
        $countLowerCase = 0;
        for ($i = 0; $i < strlen($password); $i++) {
            preg_match('/[A-Z]/', $password[$i]) ? $countUpperCase += 1 : null;
            preg_match('/[a-z]/', $password[$i]) ? $countLowerCase += 1 : null;
        }  
        if ($countUpperCase != 0) {
            $passwordStrength = $passwordStrength + (strlen($password) - $countUpperCase) * 2;
        }
        if ($countLowerCase != 0) {
            $passwordStrength = $passwordStrength + (strlen($password) - $countLowerCase) * 2;
        }

        if (preg_match('/^[a-zA-Z]{0,}$/', $password)) {
            $passwordStrength = $passwordStrength - strlen($password);
        }
        if (preg_match('/^[0-9]{0,}$/', $password)) {
            $passwordStrength = $passwordStrength - strlen($password);
        }

        $passwordClone = $password;
        while (! empty($passwordClone)) {
            if (substr_count($passwordClone, $passwordClone[0]) > 1) {
                $passwordStrength -= substr_count($passwordClone, $passwordClone[0]);
            }
            $passwordClone = str_replace($passwordClone[0], "", $passwordClone);           
        }   
    } else {
        echo "Unsupported characters";
    }
    return $passwordStrength;
}