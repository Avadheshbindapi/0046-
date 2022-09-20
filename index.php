<?php
    include './App/init.php';
    $Controller = new Controller(new Model(new Config()));
    if(isset($_POST['first_name']))
    {
        $Controller->save($_POST);
    }   
    $Controller->list();

?>