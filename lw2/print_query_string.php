<?php
header('Content-Type: text/plain; charset=UTF-8');
$myName = isset($_GET["my_name"])? $_GET["my_name"] :"";
echo "Query string = 'my_name={$myName}";
$mySurname = isset($_GET["my_surname"])? $_GET["my_surname"] :"";
echo "&my_surname={$mySurname}";
$message = isset($_GET["message"])? $_GET["message"] :"";
echo "&message={$message}";
