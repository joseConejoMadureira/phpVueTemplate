<?php

namespace src\Service;

use LogsW;
use Service\Iservice;
use src\Model\Product;
use src\Dao\DaoProduct;

class ProductService  implements Iservice
{
 
  public $uri;
  public $method;
  public $data;
  public $daoProduct;
  function __construct($uri, $method, $data)
  {    
    $this->uri = $uri;
    $this->method = $method;
    $this->data = $data;
    $this->data = json_decode($this->data);
    $this->daoProduct = new DaoProduct();
  }
  function action()
  {
    LogsW::write('productService action: ' . $this->uri[4]);
    return  $this->uri[4];
  }
  function read()
  {
    return  $this->daoProduct->read();
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

    return $this->daoProduct->create($product);
     
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
        LogsW::write('CASE: product read');
        return  $this->read();
      case 'readById':
        $this->readById();
        LogsW::write('CASE: product readById');
        break;
      case 'create':
        LogsW::write('CASE: product create');
        return $this->create();
      case 'update':
        $this->update();
        LogsW::write('CASE: product update');
        break;
      case 'delete':
        $this->delete();
        LogsW::write('CASE: product delete');
        break;
      default:
        header("HTTP/1.1 404 Not Found");
        return  "404 Not Found";
    }
  }
}
