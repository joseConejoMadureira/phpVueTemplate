<?php
namespace src\Dao;
use LogsW;
use PDO;
use PDOException;
class DaoProduct
{
   
    public function read(){
        $sql = "select * from products";
        $p_sql = ConnectionPDO::getInstance();
        try{
            $p_sql = $p_sql->query($sql);
            $result = $p_sql->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }catch(PDOException $e){
            
            LogsW::write($e);
            return json_encode('error');
        }
        
        
    }
}
