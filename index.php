<?php
    $server = "localhost";
    $user = "root";
    $dbname="dev4";
    $pass = "";
?>
    <?php
    $customer = new Master ($server, $user, $dbname, $pass);
    if(isset($_POST['submit']))
    {
        $first_name = $_POST['first_name'];
        $second_name = $_POST['second_name'];
        $mobile = $_POST['mobile'];

        $customer->addlist($first_name, $second_name, $mobile);
    }
    ?>

    <?php
        class Master
        {
            public $conn;
            public function __construct($server, $user, $dbname, $pass)
            {
                $this->conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
            }
            public function addlist($first_name, $second_name, $mobile)
            {
                $query = "INSERT INTO school VALUES (NULL, ?, ?, ?)";
                $stmt = $this->conn->prepare($query);
                $stmt->execute([$first_name, $second_name, $mobile]);
            }
        }
    ?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form action="" method="POST">
            <input type="text" name="first_name" placeholder="first Name"><br><br>
            <input type="text" name="second_name" placeholder="second Name"><br><br>
            <input type="text" name="mobile" placeholder="mobile"><br><br>
            <input type="submit" name="submit" value="submit"><br><br>
        </form>
    
</body>
</html>