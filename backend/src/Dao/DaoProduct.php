<?php
namespace src\Dao;
use LogsW;
class DaoProduct
{
   
    public function read(){
        $sql = "select * from products";
        $p_sql = ConnectionPDO::getInstance()->query($sql);  
        LogsW::write(json_encode($p_sql->fetchAll()));      
        return json_encode($p_sql->fetchAll());
    }
}
