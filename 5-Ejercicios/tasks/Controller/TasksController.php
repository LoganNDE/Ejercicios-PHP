<?php
    require_once('Models/Tasksmodels.php');

    class TasksController{

        private $tasksModel;

        public function __construct(){
            $this->tasksModel = new Tasksmodel();
        }


        public function index(){
            $data = $this->tasksModel->getAll();
            require ('View/listar.php');
        }



    }
?>