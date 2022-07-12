<?php
class ConnectionPDO
{

    public static $instance;

    

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new  
            PDO($_ENV['DSN'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], 
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }



        return self::$instance;
    }
}
