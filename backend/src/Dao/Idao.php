<?php

interface Idao 
{
    
    public function __construct();
    
    
    public function read();
    public function readById();
    public function update();
    public function create();
    public function delete();
    
}
