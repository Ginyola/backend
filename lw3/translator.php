<?php
header('Content-Type: text/plain; charset=UTF-8');
$translationArray = array('Keyboard' => 'Клавиатура',
                            'Mouse' => 'Мышь');
$receivedWord = '';
if (isset($_GET['word']))
{
    $receivedWord = $_GET['word'];
    echo key_exists($receivedWord, $translationArray) ? $translationArray[$receivedWord] : "Translation not found!";
} else {
    print_r('Word parametr is not found');
}