<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematicas</title>
</head>
<body>


    <?php

        function digitos(int $numero) : int{
            $cadena = strval($numero);
            return strlen($cadena);
        }


        function digitosN(int $num, int $pos){
            $cadena = strval($num);            
            return $cadena[$pos-1];
            
        }

    ?>
    
</body>
</html>