<?php
    

    function cambiarFormato($frase){
        $fraseConcatenada = "";
        for ($i=0; $i < strlen($frase) ; $i++) { 
            if ($i % 2 == 0){
                $frase[$i] = strtoupper($frase[$i]);
            }else{
                $frase[$i] = strtolower($frase[$i]);
            }
        }
        return $frase;
    }


    echo cambiarFormato("Me encanta aprender PHP");