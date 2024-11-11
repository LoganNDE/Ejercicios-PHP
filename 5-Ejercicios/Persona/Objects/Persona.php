<?php
    
    class Persona{

        private $DNI;
        private $nombre; 
        private $email;


        public function __construct($dni, $nombre, $email){
            $this->setDni($dni);
            $this->setNombre($nombre);
            $this->setEmail($email);
        }

        public function setDni(string $dni){
            if (strlen($dni) != 9){
                throw new Exception("El DNI intruducido no es correcto");
            }else{
                $this->DNI = $dni;
            }
        }

        
        public function setNombre(string $name){
            if (strlen($name) < 1 || strlen($name) > 60){
                throw new Exception("El nombre intruducido no es correcto");
            }else{
                $this->nombre = $name;
            }
        }

        
        public function setEmail(string $email){
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                throw new Exception("El email intruducido no es correcto");
            }else{
                $this->email = $email;
            }
        }

        public function getDni(){
            return $this->DNI;
        }

        
        public function getNombre(){
            return $this->nombre;
        }

        
        public function getEmail(){
            return $this->email;
        }


        public function __toString(){
            echo "Tu DNI es " . $this->getDni();
            echo "<br>";
            echo "Tu nombre es " . $this->getNombre();
            echo "<br>";
            echo "Tu email es " . $this->getEmail();
        }
    } 


?>