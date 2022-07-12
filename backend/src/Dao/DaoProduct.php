<?php
namespace src\Dao;
use LogsW;
use PDO;
class DaoProduct
{
   
    public function read(){
        $sql = "select * from products";
        $p_sql = ConnectionPDO::getInstance()->query($sql);  
        return json_encode($p_sql->fetchAll(PDO::FETCH_ASSOC));
    }
}
