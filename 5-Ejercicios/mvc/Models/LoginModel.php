<?php
    require_once __DIR__ . "/../Config/Conexion.php";
    session_start(); // Asegúrate de iniciar la sesión en todas las páginas
    
    Class LoginModel{
        private $pdo;

        public function __construct(){
            $dataBase = new Conexion();
            $this->pdo = $dataBase->conex();
        }
        

        public function getUserData($user){
            try{
                $query = $this->pdo->prepare("SELECT username, password FROM users WHERE username = :username");
                $query ->bindParam(":username", $user);
                $query->execute();
                return $query->fetch();
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }


        public function register($user, $password){
            try{
                $query = $this->pdo->prepare("INSERT INTO users VALUES (:username, :password)");
                $query ->bindParam(":username", $user);
                $query ->bindParam(":password", $password);
                return $query->execute();
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
    }
?>