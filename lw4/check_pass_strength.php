<?php
header('Content-Type: text/plain; charset=UTF-8');
require_once("include/common.inc.php");

if (isset($_GET['password']) && ! empty($_GET['password'])) {
    echo checkPasswordStrength($_GET['password']) . "\n";
} else {
    echo "No parametrs";
}