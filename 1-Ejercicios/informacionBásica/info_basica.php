<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información básica</title>
</head>

<style>
    .main{
        height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container{
        border: 3px solid black;
        border-radius: 5px;
        width: 30%;
        display: flex;
        flex-direction: column;
        align-items: center;
        }



</style>


<body>


    <?php

    $nombre = "Logan";
    $anyoNacimiento = 2004;

    ?>

    <div class="main">
        <div class="container">
        <h1>Informacion básica</h1>
        <p>Me llamo <?php echo ($nombre) ?> y nací en el año <?php
        echo ($anyoNacimiento) ?></p>
        </div>

    </div>

</body>
</html>