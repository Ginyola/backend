<?php
header('Content-Type: text/plain; charset=UTF-8');
require_once("include/common.inc.php");

if (isset($_GET['str']) && ! empty($_GET['str'])) {
    echo withoutLast($_GET['str']) . "\n";
} else {
    echo "No parametrs";
}