<?php
header('Content-Type: text/plain; charset=UTF-8');

if (isset($_GET['numbers']) && ! empty($_GET['numbers'])) {
    $inputString = $_GET['numbers'];
    $inputArray = explode(",", $inputString);
    $numericFlag = true;

    foreach ($inputArray as $key) {
        if (! is_numeric($key)) { 
            $numericFlag = false;
            header("Status: 400 Incorrect parametrs");
            break;        
        }
    }   
    
    if ($numericFlag) {
        $sorted = false;
        while (! $sorted) {
            $sorted = true;
            for ($i = 0; $i < count($inputArray) - 1; $i++) {
                if ($inputArray[$i] > $inputArray[$i + 1]) {
                    $tempBubble = $inputArray[$i];
                    $inputArray[$i] = $inputArray[$i + 1];
                    $inputArray[$i + 1] = $tempBubble;
                    $sorted = false;
                }
            } 
        }
    }
    foreach ($inputArray as $element) {
        print_r($element);
        if (! ($element == end($inputArray))) {
            print(",");
        }
    }
} else {
    header("Status: 400 Incorrect parametrs");
}                            //ToDo count_chars()?;