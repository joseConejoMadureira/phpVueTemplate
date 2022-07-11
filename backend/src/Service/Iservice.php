<?php
namespace Service;
interface Iservice
{
    public $uri;
    public $method;
    public $data;
    public function __construct($uri, $method, $data);

    public function action();
    public function read();
    public function readById();
    public function update();
    public function delete();
    public function route();
}
