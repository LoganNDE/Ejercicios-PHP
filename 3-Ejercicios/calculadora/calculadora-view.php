<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>


    <!--
    <a href="http://localhost/php/Ejercicios-PHP/3-Ejercicios/calculadora/calculadora.php?x=1&y=2">
        Envair datos
    </a>
    -->
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Introduzca A<input type="number" name="x">
        Introduzca B<input type="number" name="y">
    <button type="submit">Enviar</button>
    </form>
</body>
</html>




    <?php
        if ($_SERVER["REQUEST_METHOD"] == "post"){
            if (!empty($_REQUEST['x']) && !empty($_REQUEST['x'])){
                $x = $_REQUEST['x'];
                $y = $_REQUEST['y'];
                
                echo "Valor X: " . $x . "<br>";
                echo "Valor Y: " . $y . "<br>";
                echo $x . " + " . $y . " = " . ($x + $y) . "<br>";
                echo $x . " - " . $y . " = " . ($x - $y) . "<br>";
                echo $y . " - " . $x . " = " . ($y + $x) . "<br>";
                echo $x . " * " . $y . " = " . ($x * $y) . "<br>";
            }
        }
       
    ?>