<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    <?php

        $numList = [];
        $numTotalRepetidos = 0;

        function comprobarNumRepetido($numList, $numRandom){
            $repetido = false;
            if (in_array($numRandom, $numList)){
                $repetido = true;
            }

            return $repetido;
        }
        
        while (count($numList)  <= 50){
        
            $numRandom = rand(0,99);
            if (comprobarNumRepetido($numList, $numRandom)){
                $numTotalRepetidos++;
                continue;
            }else{
                array_push($numList, $numRandom);
            }
        }

        sort($numList);

        print_r($numList);

        echo "<br>" . "El numero menor: " . min($numList)  .
            "<br>" . "El numero mayor: " . max($numList) .
            "<br>" . "Media Total: " . (array_sum($numList)/count($numList)) .
            "<br> " . "Numueros repetidos omitidos: " . $numTotalRepetidos;
        
    ?>
</body>
</html>




