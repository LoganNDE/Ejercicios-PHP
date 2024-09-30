<?php

    $listaNumerosGenerados = [];
    $listaEstrellas = [];

    function generarResultado(){
        $numGenerados = 0; $listaNumerosGenerados = [];
        while($numGenerados != 5){
            $numeroAleatorio = random_int(1, 50);
            array_push($listaNumerosGenerados, $numeroAleatorio); 
            $numGenerados++;
        }
        return $listaNumerosGenerados;
    }

    function generarEstrellas(){
        $numGenerados = 0; $listaNumEstrellasGeneradas = [];
        while($numGenerados != 2){
            $numeroAleatorioEstrella = random_int(1, 9);
            array_push($listaNumEstrellasGeneradas, $numeroAleatorioEstrella); 
            $numGenerados++;
        }
        return $listaNumEstrellasGeneradas;
    }


    $listaNumerosGenerados = [...generarResultado()];
    $listaEstrellas = [...generarEstrellas()];

    if (isset($_POST)){
        generarResultado();
        generarEstrellas();
    }