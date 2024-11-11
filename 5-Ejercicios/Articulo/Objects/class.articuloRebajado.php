<?php
    include("class.articulo.php");
    //if (!class_exists('Articulo')){
        class ArticuloRebajado extends Articulo {

            private int $pRebaja;

            function __construct(string $nombre, int $precio, int $pRebaja){
                parent::__construct($nombre, $precio);
                $this->setRebaja($pRebaja);
            }


            function setRebaja($pRebaja): void{
                $this->pRebaja = $pRebaja;
            }

            function getRebaja(): int{
                return $this->pRebaja;
            }



            public function calcularDescuento(): int{
                return (parent::getPrecio() * $this->getRebaja()) / 100;
            }

            public function precioRebajado(): int{
                return parent::getPrecio() - (parent::getPrecio() * $this->getRebaja()) / 100;
            }

            function __toString(): string {
                return parent::__toString() . '<br>' .
                       '<span class="badge bg-warning text-dark">' . $this->getRebaja() . '% de descuento</span><br>' .
                       'El descuento es de <span class="text-success">' . $this->calcularDescuento() . '€</span><br>' .
                       'Precio final: <span class="fw-bold">' . $this->precioRebajado() . '€</span>';
            }

        }
    //}
?>