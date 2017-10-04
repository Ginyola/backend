<?php
header('Content-Type: text/plain; charset=UTF-8');
require_once("include/common.inc.php");

if (isset($_GET['text']) && ! empty($_GET['text'])) {
    echo removeExtraBlanks($_GET['text']) . "\n";
} else {
    echo "No parametrs";
}