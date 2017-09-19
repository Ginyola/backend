<?php
header('Content-Type: text/plain; charset=UTF-8');
$setOfOperations = array ("sum", "sub", "div", "mul");
$firstArgument = isset($_GET["arg1"]) ? $_GET["arg1"] : 0;
$secondArgument = isset($_GET["arg2"]) ? $_GET["arg2"] : 0;
$operation = isset($_GET["operation"]) ? $_GET["operation"] : false;

if ($operation != false) {
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
    echo "Operation is not set";
}