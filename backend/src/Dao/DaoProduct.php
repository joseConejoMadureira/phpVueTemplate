<?php
namespace src\Dao;
class DaoProduct
{
   
    public function read(){
        $sql = "select * from products";
        $p_sql = ConnectionPDO::getInstance()->prepare($sql);
        $p_sql->execute();
    }
}
