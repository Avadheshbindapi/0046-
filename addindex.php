<?php
include'./App/init.php';
$StudentConroller = new StudentConroller(new StudentModel());
if(isset($_POST['first_name']))
{
    $StudentConroller->savestudent($_POST);
}   
$StudentConroller->liststudent();