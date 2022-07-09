<?php
require_once __DIR__ . "/vendor/autoload.php";



LogsW::write(json_encode($_SERVER));

//request
$uri = 'x';

switch ($uri) {
    case 'x':
        LogsW::write('CASE X');

        break;
    case 'y':
        break;
    case 'z':
        break;
}