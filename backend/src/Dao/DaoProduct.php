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
    //TODO

    public function read(){
        $sql = "select * from products";
         
        try{
            $result = $this->connection->query($sql)
                     ->fetchAll(PDO::FETCH_CLASS,Product::class);
            return $result;
        }catch(PDOException $e){
            
            LogsW::write($e);
            return 'error read products';
        }
        
        
    }
}
