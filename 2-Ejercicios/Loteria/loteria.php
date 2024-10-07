<?php

    $listaNumerosGenerados = [];

    function generarResultado($n, $rangoNumGeneradoss){

        $numGenerados = 0; $listaNumerosGenerados = [];
        while($numGenerados != $n){
            $numeroAleatorio = random_int(1, $rangoNumGeneradoss);
            array_push($listaNumerosGenerados, $numeroAleatorio); 
            $numGenerados++;
        }
        asort($listaNumerosGenerados);
        return $listaNumerosGenerados;
    }

    //$listaNumerosGenerados = [...generarResultado()];


    /*  if (isset($_POST)){
            generarResultado();
    }

    */

    