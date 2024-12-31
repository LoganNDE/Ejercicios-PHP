
<?php


    function analizadorFrase($frase){

        $numPalabrasTotales = str_word_count($frase);
        $arrayPalabrasTotales = str_word_count($frase, 1);
        $numTotalCaracteres = 0;
        $contadorCaracteresPalabra = 0;
        
        foreach ($arrayPalabrasTotales as $palabras){
            for ($i=0; $i < strlen($palabras) ; $i++) { 
                
                if (ctype_alnum($palabras[$i]))
                $contadorCaracteresPalabra++;

            }
            echo $palabras . "------> $contadorCaracteresPalabra <br>";
            $numTotalCaracteres += $contadorCaracteresPalabra;
            $contadorCaracteresPalabra = 0;
        }

        echo "Numero total de palabras: $numPalabrasTotales <br>";
        echo "Letras totales: $numTotalCaracteres <br>";
    }

    analizadorFrase("Hola que tal estas");

?>