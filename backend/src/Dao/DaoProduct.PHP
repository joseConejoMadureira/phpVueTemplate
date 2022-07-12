<?php
namespace src\DAO;
class DaoProduct
{
    public static $instance;
    public static function getInstance()
    {
        if (!isset(self::$instance))
            self::$instance = new DaoProduct();

        return self::$instance;
    }
    public function read(){
        $sql = "select * from teste";
        $p_sql = ConnectionPDO::getInstance()->prepare($sql);
        $p_sql->execute();
    }
}
