<?php
header('Content-Type: text/plain; charset=UTF-8');
$setOfOperations = array ("sum", "sub", "div", "mul");
$setOfUsingParametrs = array ("arg1", "arg2", "operation");

//проверка валидности параметров.begin
parse_str($_SERVER['QUERY_STRING'], $setOfReceivedParametrs);
//var_dump($setOfReceivedParametrs);
foreach($setOfReceivedParametrs as $key => $value) {
    echo (in_array($key, $setOfUsingParametrs)) ? NULL : "{$key} - unknown argument\n";
    if (($key == "arg1") || ($key == "arg2")) 
    {
        echo !is_numeric($value) ? "{$value} is not a number\n": NULL;
    }
    //echo "$key\n";
}
//проверка валидности параметров.end

$firstArgument = (isset($_GET["arg1"]) && is_numeric($_GET["arg1"])) ? $_GET["arg1"] : NULL;
$secondArgument = (isset($_GET["arg2"]) && is_numeric($_GET["arg1"])) ? $_GET["arg2"] : NULL;
$operation = isset($_GET["operation"]) ? $_GET["operation"] : NULL;

if (($firstArgument != NULL) && ($secondArgument != NULL) && ($operation != NULL)) {
    if (in_array($operation, $setOfOperations)) {
        $result = 0;
        $operation == "sum" ? $result = $firstArgument + $secondArgument : NULL;
        $operation == "sub" ? $result = $firstArgument - $secondArgument : NULL;
        $operation == "div" ? $result = $firstArgument / $secondArgument : NULL;
        $operation == "mul" ? $result = $firstArgument * $secondArgument : NULL;
            echo "Result = {$result}";
    }   else  {
        echo "Unknown operation";
    }  
}   else {
    echo (isset($firstArgument) && !(empty($firstArgument))) ? "First argument is set\n" : "First argument is not set or not a number\n";
    echo (isset($secondArgument) && !(empty($secondArgument))) ? "First argument is set\n" : "Second argument is not set or not a number\n"; 
    echo (isset($operation) && !(empty($operation))) ? "Operation is not set\n" : "Operation is not set\n";
}