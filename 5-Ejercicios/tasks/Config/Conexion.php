<?php
    Class Connexion{
        private $pdo;
        private $nameDDBB;
        private $password;
        private $user;
        private $host;


        public function __construct(){
            $this->pdo = '';
            $this->nameDDBB = 'tasks';
            $this->password = '';
            $this->user = 'root';
            $this->host = 'localhost';
        }

        public function conex(){
            try{
                $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->nameDDBB;charset=utf8",$this->user, $this->password);
                return $this->pdo;
            } catch (PDOException $e) {
                print " <p class=\"aviso\">Error: No puede conectarse con la base de datos. {$e->getMessage()}</p>\n";
                exit;
            }
        }
    }
?>