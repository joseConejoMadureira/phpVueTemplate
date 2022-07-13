<?php
namespace src\Dao;
use LogsW;
use PDO;
use PDOException;
class DaoProduct
{
    public $connection;
    function __construct()
    {  
        $this->connection = ConnectionPDO::getInstance();
    }
   
    public function read(){
        $sql = "select * from products";
         
        try{
            $result = $this->connection->query($sql)
                     ->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e){
            
            LogsW::write($e);
            return 'error read products';
        }
        
        
    }
}
