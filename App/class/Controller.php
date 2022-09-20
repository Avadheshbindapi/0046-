<?php
class Controller 
{
    public $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function list()
    {
    include './View/from.php';
    }
    public function save($data)
    {
        $this->model->save($data);
    }
}