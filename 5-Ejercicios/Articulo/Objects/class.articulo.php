<?php
    class Articulo{
        protected string $nombre;
        protected int $precio;

        function setPNombre($pNombre){
            $this->nombre = $pNombre;
        }

        function getPNombre(){
            return $this->nombre;
        }

        function setPrecio($pPrecio){
            if (is_numeric($pPrecio)){
                $this->precio = $pPrecio;
            }
        }

        function getPrecio(): int{
            return $this->precio;
        }

        function __construct(string $nombre, int $precio){
            $this->setPNombre($nombre);
            $this->setPrecio($precio);
        }


        function __toString() {
            return '<span class="fw-bold">' . $this->nombre . '</span> ' . 
                   '<span class="text-decoration-line-through text-muted">' . $this->precio . '€</span><br>';
        }
    }
?>