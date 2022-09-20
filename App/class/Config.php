<?php
    class Config
    {
        public $conn;
        public function __construct()
        {
            $server = "localhost";
            $user = "root";
            $dbname ="dev4";
            $pass = "";
            $this->conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
        }
        public function conn()
        {
            return $this->conn();  
        }
    }
?>