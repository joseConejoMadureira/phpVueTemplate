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
    $this->data = json_decode($this->data);
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
    $product = new Product();
    $product->name = $this->data->name;
    $product->price = $this->data->price;

    LogsW::write('productService create - Produto nome :'. $product->name);
    LogsW::write('productService create - Produto preço :'. $product->price);

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
