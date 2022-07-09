<?php
require_once __DIR__ . "/vendor/autoload.php";
  
  
LogsW::write(json_encode($_SERVER));
LogsW::write(json_encode($_SERVER['REQUEST_METHOD']));
LogsW::write(json_encode($_REQUEST));


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