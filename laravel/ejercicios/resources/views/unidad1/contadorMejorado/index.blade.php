<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador en PHP</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        .main{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        .title{
            margin-bottom: 30px;
        }


        .container1{
            margin-top: 20px;
            margin-bottom: 30px;
            padding: 10px;
            width: 35vw;
            height: 10vh;
            border: solid 1px black;
            border-radius: 5px;
            white-space: normal; /* Permitir que el texto se ajuste al ancho del contenedor */
            word-wrap: break-word; /* Romper las líneas si es necesario */

        }


        
        .container2{
            margin-top: 20px;
            text-align: center;
            padding: 10px;
            width: 35vw;
            height: 5vh;
            border: solid 1px black;
            border-radius: 5px;
            white-space: normal; /* Permitir que el texto se ajuste al ancho del contenedor */
            word-wrap: break-word; /* Romper las líneas si es necesario */

        }

    </style>

</head>
<body>


    <div class="main">
        <h1 class="title">Contador en PHP</h1>

        <?php
            $contador = 0; $maxContador = 100

        ?>

        <h2>Este contador empieza en <?= $contador ?> y finaliza con un <?= $maxContador ?></h2>
        <p>En este bloque de codigo utilizamos un bucle for para conseguir el resultado deseado</p>
        <div class="container1">


            <?php
                for ($contador; $contador <= $maxContador; $contador++){
                    if ($contador == 100){
                        echo $contador;
                    }else{
                        echo $contador . ",";
                    }
                }
            ?>


        </div>


        <?php
        
            $contador = 10;
            $minContador = 0;
        
        ?>


        <h2>Este contador empieza en <?= $contador ?> y finaliza con un <?= $minContador ?></h2>
        <p>En este último bloque de codigo utilizamos un bucle while para conseguir el resultado deseado</p>
        <div class="container2">

            <?php

                while ($contador >= $minContador){
                    if ($contador == $minContador){
                        echo $contador;
                        exit;
                    }
                    echo $contador . "-";
                    $contador--;
                }

            ?>


        
        </div>

    </div>

    


</body>
</html>