<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
    $arrayNumeros = [];
    comprobarMayor(1,8,4,23,3,4,5,6,87,90,12,23,56,2);

    function comprobarMayor(...$numeros){
        $mayortemp = 0;
        $arrayNumeros = func_get_args();
        for($i = 0; $i < count($arrayNumeros); $i++) {
            
            if ($arrayNumeros[$i] > $mayortemp){
                $mayortemp = $arrayNumeros[$i];
            }
        }

        $mayortemp;
    }


?>


    <h1>Comprobacion de numero mayor</h1>
    <h2>El array a comprobar es: <?php print_r($arrayNumeros)?> </h2>


</body>
</html>