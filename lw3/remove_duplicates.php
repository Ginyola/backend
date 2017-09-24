<?php
header('Content-Type: text/plain; charset=UTF-8');
//echo count($argv);
if (count($argv) < 3 && count($argv) != 1) {
    $inputString = $argv[1];
    $outputString = '';
    for ($i = 0; $i < strlen($inputString); $i++) {
        ! strstr($outputString, $inputString[$i]) ? $outputString = $outputString . $inputString[$i] : null;
       // print_r($outputString);
    }
    echo $outputString;
} else {
    echo "Error";
}