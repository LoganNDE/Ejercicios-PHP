<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar hora</title>
</head>
<body>
    <?php
    
    $hora = "0:21:50";
    $horaArray = explode(':', $hora);

    function comprobarHora($array){
        
        $horacorrecta = true;
        list($hora, $minutos, $segundos) = $array;

        if ($hora > 23 || $hora < 0){
            echo "Hora incorrecta" . "<br>";
            $horacorrecta = false;
        }elseif ($minutos > 59 || $minutos < 0){
            echo "Minutos incorrectos" . "<br>";
            $horacorrecta = false;
        }elseif ($segundos > 59 || $segundos < 0){
            echo "Segundos incorrectos" . "<br>";
            $horacorrecta = false;
        }

        if ($horacorrecta){
        echo $hora . ":" . $minutos . ":" . $segundos . "<br>" . 
        "Enhorabuena, sabes programar un reloj";
        }else{
        echo $hora . ":" . $minutos . ":" . $segundos . "<br>" . 
        "Deberias de preguntarle a pepe para empezar a entender las cosas";
        }

    }

    comprobarHora($horaArray);

    ?>



</body>
</html>