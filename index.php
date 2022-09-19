<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <input type="text" name="first_name" placeholder="first Name"><br><br>
            <input type="text" name="second_name" placeholder="second Name"><br><br>
            <input type="submit" name="submit" value="submit"><br><br>
        </form>
    
        <?php
            
             if(isset($_POST['submit']))
             {
                 $first_name = $_POST['first_name'];
                 $second_name = $_POST['second_name'];
                 echo "<h2>Hello $first_name $second_name ! Greetings from BindAPI.</h2>";
             }  
             ?> 
    </div>
</body>
</html>