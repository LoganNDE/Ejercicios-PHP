<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de informatica | Listado de notas</title>
</head>

<body>

    <?php

        $nota1 = 7;
        $nota2 = 6;
    
    ?>

    <h1>Listado de notas</h1>
    <?php

        if ($nota1 > $nota2) {
            echo "La nota 1 es superior a la nota 2";
        } elseif ($nota1 == $nota2) {
            echo "Ambas notas son iguales";
        } else {
            echo "La nota 2 es superior a la nota 1";
        }

    ?>




</body>

</html>