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
            gap: 20px;
        }

        .container1{
            padding: 10px;
            width: 35vw;
            height: 10vh;
            border: solid 1px black;
            border-radius: 5px;
            white-space: normal; /* Permitir que el texto se ajuste al ancho del contenedor */
            word-wrap: break-word; /* Romper las líneas si es necesario */

        }


        
        .container2{
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
    <h1>Contador en PHP</h1>
        <div class="container1">

            <?php
                for ($i = 0 ; $i <= 100; $i++){
                    if ($i == 100){
                        echo $i;
                    }else{
                        echo $i . ",";
                    }
                }
            ?>

        </div>

        <div class="container2">

            <?php
                $contador = 10;
                while ($contador >= 0){
                    if ($contador == 0){
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