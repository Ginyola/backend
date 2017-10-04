<?php
header('Content-Type: text/plain; charset=UTF-8');

$includeDirectory = 'inc';
$directoryContent = scandir($includeDirectory);

for ($i = 2; $i < count($directoryContent); $i++) {
    if ($directoryContent != 'autoload.inc.php') {
        require_once($directoryContent[$i]);
    }
}