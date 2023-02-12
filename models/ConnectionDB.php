<?php

class ConnectionDB{

    private $conn;
    private static $instance = null;

   public function __construct()
   {
       $this->conn = new PDO("mysql:host=localhost;dbname=shops", "root", "");
   }

    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new ConnectionDB();
        }
        return self::$instance;
    }
} 