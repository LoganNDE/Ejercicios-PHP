<?php
    require_once("Config/Conexion.php");

    Class Tasksmodel{
        private $pdo;

        public function __construct(){
            $dataBase = new Connexion();
            $this->pdo = $dataBase->conex();
        }

        public function getAll(){
            $query = "SELECT * FROM internal_tasks";
            $data = $this->pdo->prepare($query);
            $data->execute();
            return $data = $data->fetchAll();
        }

    }
?>