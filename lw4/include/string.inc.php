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