<?php
header('Content-Type: text/plain; charset=UTF-8');
echo "Number of arguments: " . (count($argv) - 1) . "\n";
echo "Arguments:";
for ($i = 1; $i < count($argv); $i++) {
    echo " ";
    print_r($argv[$i]);
}