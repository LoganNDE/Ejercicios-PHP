<?php

    $listaNumerosGenerados = [];

    function generarResultado(){
        $numGenerados = 0; $listaNumerosGenerados = [];
        while($numGenerados != 6){
            $numeroAleatorio = random_int(1, 49);
            array_push($listaNumerosGenerados, $numeroAleatorio); 
            $numGenerados++;
        }
        return $listaNumerosGenerados;
    }

    $listaNumerosGenerados = [...generarResultado()];


    if (isset($_POST)){
        generarResultado();
    }