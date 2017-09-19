<?php
header('Content-Type: text/plain; charset=UTF-8');
$firstArgument = isset($_GET["arg1"]) ? $_GET["arg1"] : 0;
$secondArgument = isset($_GET["arg2"]) ? $_GET["arg2"] : 0;
$sum = $firstArgument + $secondArgument;
echo $sum;