<?php
header('Content-Type: text/plain; charset=UTF-8');

if (isset($_GET['arr']) && ! empty($_GET['arr'])) {
    $inputString = $_GET['arr'];
    $inputArray = explode(",", $inputString);
    for ($i = 0; $i < count($inputArray) / 2; $i++) {
        $tempArrayElement = $inputArray[$i];
        $inputArray[$i] = $inputArray[count($inputArray) - $i - 1];
        $inputArray[count($inputArray) - $i - 1] = $tempArrayElement;
    }
    print_r("Array (");
    for ($i = 0; $i < count($inputArray); $i++) {
        print_r(" [" . $i . "]" . " => " . $inputArray[$i]);
    }    
    print_r(" )");
} else {
    header("Status: 400 Incorrect parametrs");
}