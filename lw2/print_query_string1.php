<?php
header('Content-Type: text/plain; charset=UTF-8');
echo "\nQuery string = \n";
echo $_SERVER['QUERY_STRING'];
var_export($_SERVER['QUERY_STRING']);

