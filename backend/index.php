<?php
require_once __DIR__ . "/vendor/autoload.php";
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

//log
$data = json_decode(file_get_contents("php://input"));
$price = $data->price;
LogsW::write(json_encode($data));
LogsW::write($price);
