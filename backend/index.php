<?php
require_once __DIR__ . "/vendor/autoload.php";
use src\Service\ProductService;

$uri = explode("/", $_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];
$service = $uri[3];
$data = json_decode(file_get_contents("php://input"));
LogsW::write(json_encode($data));
switch ($service) {
    case 'product':
        LogsW::write('CASE: product');
        $product  = new  ProductService($uri, $method, $data);
        
        break;
    case 'y':
        break;
    case 'z':
        break;
    default:
        LogsW::write('CASE: 404');
        header("HTTP/1.1 404 Not Found");
        die();
}
