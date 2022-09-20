<?php
class StudentModel
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
    
    public function savestudent($data)
    {
        $sql = "INSERT INTO school(first_name, second_name, mobile) VALUES (?, ?, ?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$data['first_name'], $data['second_name'], $data['mobile']]);
    }
}