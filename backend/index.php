<?php
require_once __DIR__ . "/vendor/autoload.php";

use src\Service\ProductService;

$uri = explode("/", $_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];
$service = $uri[3];
$data = json_decode(file_get_contents("php://input"));

//logs
LogsW::write(json_encode($data));
LogsW::write(json_encode($uri));
LogsW::write(json_encode($data));

switch ($service) {
    case 'product':
        LogsW::write('CASE: product');
        $product  = new  ProductService($uri, $method, $data);
        switch ($product->method()) {
            case 'read':
                $product->read();
                LogsW::write('CASE: product read');
                break;
            case 'readById':
                $product->readById();
                LogsW::write('CASE: product readById');
                break;
            case 'create':
                $product->create();
                LogsW::write('CASE: product create');
                break;
            case 'update':
                $product->update();
                LogsW::write('CASE: product update');
                break;
            case 'delete':
                $product->delete();
                LogsW::write('CASE: product delete');
                break;
            default:
                LogsW::write('CASE: product 404');
                header("HTTP/1.1 404 Not Found");
                die();
        }
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
