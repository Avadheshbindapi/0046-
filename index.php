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
            <input type="text" name="last_name" placeholder="Last Name"><br><br>
            <input type="submit" name="submit" value="submit"><br><br>
        </form>
        <h2>hellow
        Hello {first_name} {last_name}! Greetings from BindAPI.
        </h2>
        <?php
            
             if(isset($_POST['submit']))
             {
                 $first_name = $_POST['first_name'];
                 $last_name = $_POST['last_name'];
             }
             echo "$first_name";
                echo "<br>";
                echo "$last_name";
             
             ?>
            
    </div>
</body>
</html>