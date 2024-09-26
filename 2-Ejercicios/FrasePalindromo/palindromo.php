<?php

    $frasePalindromo = "ligar es ser agil";
    $fraseInvertida = strrev($frasePalindromo);

    echo "Frase original: $frasePalindromo <br>";
    echo "Frase Invertida: $fraseInvertida <br>";

    echo "<br>Si eliminamos los espacion obtenemos el siguiente resultado: <br>";

    if (str_replace(' ', '', $frasePalindromo) == str_replace(' ', '', $fraseInvertida)){
        echo "$frasePalindromo, si es una frase palindroma <br>";
    }else{
        echo "$frasePalindromo, no es una frase palindroma <br>";
    }
