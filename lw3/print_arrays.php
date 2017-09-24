<?php
header('Content-Type: text/plain; charset=UTF-8');
$primeArray = array(3, 5, 7, 11, 13, 17, 37, 43);
$functionNameArray = array('count' => 'считает количеств элементов в массиве',
                             'is_array' => 'проверка, является ли элемент массивом',
                             'array_merge' => 'слияние массивов, указанных в параметрах',
                             'empty' => 'проверка, является ли переменная пустой',
                             'print_r' => 'печать значения переменной');
$matrixOfOne = array(array(1, 0, 0, 0),
                      array(0, 1, 0, 0),
                      array(0, 0, 1, 0),
                      array(0, 0, 0, 1));

$inputData = array ($primeArray, $functionNameArray, $matrixOfOne);
for ($i = 0; $i < count($inputData); $i++)
{
    echo "Number of elements in array: " . count($inputData[$i]) . "\n";
    var_dump($inputData[$i]);
}