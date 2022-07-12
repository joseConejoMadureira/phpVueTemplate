<?php
require_once __DIR__ . "/vendor/autoload.php";

use src\Service\ProductService;
use src\Dao\DaoProduct;

$dotenv = Dotenv\Dotenv::createMutable(__DIR__);
$dotenv->load();

$uri = explode("/", $_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];
$service = $uri[3];
$data = json_decode(file_get_contents("php://input"));
$data = json_encode($data);
switch ($service) {
        //PRODUCT
    case 'product':
        LogsW::write('CASE: product');
        $product  = new  ProductService($uri, $method, $data);
        echo   $product->route();
        break;
        // Y
    case 'y':
        break;
        // Z
    case 'z':
        break;
        // 404 
    default:
        LogsW::write('CASE: 404');
        header("HTTP/1.1 404 Not Found");
        die();
}
