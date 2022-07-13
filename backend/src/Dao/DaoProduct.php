<?php
namespace src\Dao;
use LogsW;
use PDO;
use PDOException;
class DaoProduct
{
   
    public function read(){
        $sql = "select * from products";
        try{
            $p_sql = ConnectionPDO::getInstance()->query($sql);  
            $result = $p_sql->fetchAll(PDO::FETCH_ASSOC);
          
        }catch(PDOException $e){
            LogsW::write($e);
            return json_encode('error');
        }
        
        return json_encode($result);
    }
}
