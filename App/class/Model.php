<?php
class Model
{
    public $conn;
    public function __construct(Config $conn)
    {
        $this->conn = $conn->conn;
    }
    public function save($data)
    {
        $sql = "INSERT INTO school (first_name, second_name, mobile) VALUES (?, ?, ?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$data['first_name'], $data['second_name'], $data['mobile']]);
    } 
}

?>