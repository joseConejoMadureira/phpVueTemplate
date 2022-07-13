<?php

namespace src\Dao;

use LogsW;
use PDO;
use PDOException;
use src\Model\Product;

class DaoProduct
{
    public $connection;
    function __construct()
    {
        $this->connection = ConnectionPDO::getInstance();
    }


    public function read()
    {
        $sql = "select * from products";

        try {
            return $this->connection->query($sql)
                ->fetchAll(PDO::FETCH_CLASS, Product::class);
        } catch (PDOException $e) {

            LogsW::write($e);
            return 'error read products';
        }
    }
    public function create(Product $product){
        $statement = "
        INSERT INTO products 
            ( name, price)
        VALUES
            (:name, :price);";

        try {

            return $this->connection->prepare($statement)
                ->execute(array(
                    'name'=> $product->name,
                    'price'=> $product->price
                ));
                
        } catch (PDOException $e) {

            LogsW::write($e);
            return 'error read products';
        }
    }
}
