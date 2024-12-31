<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de informatica | Listado de notas</title>
</head>

<body>

    <?php

        $nota1 = 9;
        $nota2 = 8;
        $nota3 = 1;

    ?>

    <h1>Listado de notas</h1>
    <?php

        echo "Nota1: " . $nota1 . " | " . " Nota2: " . $nota2 . " | " . " Nota3: " . $nota3 . "<br>";

        if ($nota1 > $nota2 && $nota2 > $nota3) {
            echo "La primera nota es la mas alta " . "(" . $nota1 . ")";
        } elseif ($nota2 > $nota3 && $nota3 > $nota1) {
            echo "La segunda nota es la mas alta" . "(" . $nota2 . ")";
        } else {
            echo "La tercera nota es la mas alta" . "(" . $nota3 . ")";
        }

    ?>

</body>

</html>