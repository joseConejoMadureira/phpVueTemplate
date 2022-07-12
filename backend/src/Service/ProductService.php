<?php

namespace src\Service;

use LogsW;
use Service\Iservice;
use src\Model\Product;

class ProductService  implements Iservice
{
 
  public $uri;
  public $method;
  public $data;

  function __construct($uri, $method, $data)
  {
    LogsW::write(json_encode($_ENV));

    $this->uri = $uri;
    $this->method = $method;
    $this->data = $data;
    $this->data = json_decode($this->data);
  }
  function action()
  {
    LogsW::write('productService action: ' . $this->uri[4]);
    return  $this->uri[4];
  }
  function read()
  {
    return  "";
  }
  function readById()
  {
    LogsW::write('productService readById');

    return  "";
  }
  function create()
  {
    $product = new Product();
    $product->name = $this->data->name;
    $product->price = $this->data->price;

    LogsW::write('productService create - Produto nome :' . $product->name);
    LogsW::write('productService create - Produto preço :' . $product->price);

    return  "";
  }
  function update()
  {
    LogsW::write('productService update');

    return  "";
  }
  function delete()
  {
    LogsW::write('productService delete');
    return  "";
  }

  function  route()
  {
    switch ($this->action()) {
      case 'read':
        $this->read();
        LogsW::write('CASE: product read');
        break;
      case 'readById':
        $this->readById();
        LogsW::write('CASE: product readById');
        break;
      case 'create':
        $this->create();
        LogsW::write('CASE: product create');
        break;
      case 'update':
        $this->update();
        LogsW::write('CASE: product update');
        break;
      case 'delete':
        $this->delete();
        LogsW::write('CASE: product delete');
        break;
      default:
        LogsW::write('CASE: product 404');
        header("HTTP/1.1 404 Not Found");
        die();
    }
  }
}
