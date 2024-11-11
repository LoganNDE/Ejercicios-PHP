<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $arrayNumeros = [1, 8, 4, 23, 3, 4, 5, 6, 87, 90, 12, 23, 56, 2];
    $mayorNumero = comprobarMayor(...$arrayNumeros);

    function comprobarMayor(...$numeros){
        $mayorTemp = $numeros[0];
        for($i = 1; $i < count($numeros); $i++) {
            if ($numeros[$i] > $mayorTemp){
                $mayorTemp = $numeros[$i];
            }
        }
        return $mayorTemp;
    }
?>

<h1>Comprobación de número mayor</h1>
<h2>El array a comprobar es: <?php echo implode(", ", $arrayNumeros); ?> </h2>
<h2>El número mayor es: <?php echo $mayorNumero; ?></h2>

</body>
</html>
