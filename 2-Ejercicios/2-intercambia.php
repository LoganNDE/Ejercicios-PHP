<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    
    <?php


        function intercambiar($valor1, $valor2){
            $temp = 0;

            $temp = $valor1;
            $valor1 = $valor2;
            $valor2 = $temp;

            print "Valor 1:" . $valor1 . "<br>" . "Valor 2:" . $valor2;  
        }

        intercambiar(2, 3);

    
    ?>


</body>
</html>