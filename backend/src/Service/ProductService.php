<?php

namespace src\Service;

use src\Model\Product;
use LogsW;

class ProductService
{
  public $uri;
  public $method;
  public $data;

  public Product $product;

  function __construct($uri, $method, $data)
  {
    $this->uri = $uri;
    $this->method = $method;
    $this->data = $data;
    if($this->data->name && $this->data->price ){
      $this->product->name = $this->data->name;
      $this->product->price = $this->data->price;
    }
   
  }
  function method()
  {
    return  $this->uri[4];
  }
  function read()
  {
    return  "";
  }
  function readById()
  {
    return  "";
  }
  function create()
  {
    LogsW::write('Product service create Product: ' . $this->product);
    $this->product;

    return  "";
  }
  function update()
  {
    return  "";
  }
  function delete()
  {
    return  "";
  }
}
