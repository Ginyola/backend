<?php
header('Content-Type: text/plain; charset=UTF-8');

if (isset($_GET['string']) && ! empty($_GET['string'])) {
    $inputString = $_GET['string'];
    $inputArray = preg_split('//u', $inputString, -1, PREG_SPLIT_NO_EMPTY);
    $inputArray = array_map('strtolower', $inputArray);
    $countCharactersArray = array();
    for ($i = 0; $i < count($inputArray); $i++) {
        if (key_exists($inputArray[$i], $countCharactersArray)) {
            $countCharactersArray[$inputArray[$i]] = $countCharactersArray[$inputArray[$i]] + 1;
        } else {
            $countCharactersArray += [$inputArray[$i] => 1]; 
        }
    }
    //var_dump($countCharactersArray);
    foreach($countCharactersArray as $key => $value) {
        print_r($key . " - " . $value . "\n");
    }
} else {
    header("Status: 400 Incorrect parametrs");
}                            //count_chars();