<?php

namespace src\Service;

class ProductService
{
  public $uri;
  public $method;
  public $data;
  function __construct($uri, $method, $data)
  {
    $this->uri = $uri;
    $this->method = $method;
    $this->data = $data;
  }

}
