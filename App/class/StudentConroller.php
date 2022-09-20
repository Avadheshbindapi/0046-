<?php
class StudentConroller 
{
    public $model;
    public function __construct(StudentModel $model)
    {
        $this->model = $model;
    }
    public function liststudent()
    {
    include'./View/index.php';
    }
    public function savestudent($data)
    {
        $this->model->savestudent($data);
    }
}