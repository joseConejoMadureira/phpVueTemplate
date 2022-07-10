<?php
require_once __DIR__ . "/vendor/autoload.php";
//request
$uri = explode("/", $_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];
$model = $uri[3];

switch ($model) {
    case 'product':
        LogsW::write('CASE: product');

        break;
    case 'y':
        break;
    case 'z':
        break;
    default:
        LogsW::write('CASE: 404');
        break;
}

//log
$data = json_decode(file_get_contents("php://input"));
LogsW::write(json_encode($data));
LogsW::write($price);
foreach ($uri as $value) {
    LogsW::write($value);
}
LogsW::write($uri[3]);
