<?php
header('Content-Type: text/plain; charset=UTF-8');
$name = isset($_GET["name"]) ? $_GET["name"] : "";
echo "Hello, Dear {$name}!";