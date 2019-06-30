<?php

class Database {
    public static $connection =null;

    public function __construct()
    {
        if(self::$connection){
            return self::$connection;
        }
        $this->connect();
        return self::$connection;
    }

    public function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ajax_sql";

        self::$connection = new mysqli($servername,$username,$password,$dbname);
        if(self::$connection->connect_error){
            die("Không thể kết nối CSDL");
        }
    }

    public function disconnect(){
        if(self::$connection){
            self::$connection->close();
        }
    }
}