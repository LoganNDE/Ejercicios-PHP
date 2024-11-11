<?php
    include_once("Persona.php");


    class Alumno extends Persona{

        private $numeroExpediente;

        public function __construct($dni, $nombre, $email, $expediente){
            parent::__construct($dni, $nombre, $email);
            $this->setNumExpediente($expediente);
        }

        public function setNumExpediente(string $expediente){
            if (strlen($expediente) >= 1 || strlen($expediente) <= 50){
                $this->numeroExpediente = $expediente;
            }else{
                throw new Exception("El numero de expediente no s correcto. Vuelva a intentarlo");
            }
        }

        public function getNumExpediente(){
            return $this->numeroExpediente;
        }
    }
?>