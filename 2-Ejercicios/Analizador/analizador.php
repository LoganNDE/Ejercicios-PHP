




<?php

/*A partir de una frase con palabras sólo separadas por espacios, devolver:
• Letras totales y cantidad de palabras
• Una línea por cada palabra indicando su tamaño
Nota: no se puede usar str_word_count*/




    function detallesFrase($frase){

        $contadorEspacios = substr_count($frase, ' ');
        $arrayPalabra = explode(" ", $frase);
        $contadorPalabras = count($arrayPalabra);
        $contadorLetras = 0;

        for ($i=0; $i < strlen($frase); $i++) {
            
            if (ctype_alpha($frase[$i])) {
                $contadorLetras++;
            }
            
        }

    
        echo "Frase completa: $frase <br>";
        echo "Numero de palabras: $contadorPalabras <br>";
        echo "Numero de letras totales: $contadorLetras <br>";



        $contadorLetrasAux = 0;

        echo "<br> Contador de letras por palabra <br>";

        foreach ($arrayPalabra as $palabra) {
            echo $palabra . "--->";
            
            for ($i=0; $i < strlen($palabra) ; $i++) { 
                if (ctype_alpha($frase[$i])) {
                    $contadorLetrasAux++;
                }
            }
            echo $contadorLetrasAux . "<br>";
            $contadorLetrasAux = 0;
        }


        

    }


    detallesFrase("Hola que tal")

?>