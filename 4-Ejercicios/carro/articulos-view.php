<?php include ("articulos.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decathlon | Poyecto Carro</title>
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Schibsted+Grotesk:ital,wght@0,400..900;1,400..900&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Schibsted Grotesk", sans-serif;
            font-optical-sizing: auto;
            font-weight: normal;
            font-style: normal;
        }

        .wrapper{
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;

        }

        .articulos{
            width: 1200px;
            padding: 50px 0px;
            display: grid;
            grid-template-columns: repeat(4,1fr);
            gap: 15px;
        }

        img{
            width: 60%;
        }

        h2{
            font-size: 20px;
            font-family: "Bebas Neue", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .grid-card{
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 330px;
            border: 1px solid grey;
        }

        .btnCarro{
            margin-top: 8px;
            padding: 5px 12px;
            background-color: #ffa41c;
            border-radius: 5px;
            border: none;
            transition: all 0.2s;
        }

        .btnCarro:hover{
            cursor: pointer;
            background-color: #ffd814;
        }

        .price{
            position: absolute;
            left: 30px;
            top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            height: 30px;
            width: 30px;
            background-color: green;
            color: white;
            border-radius: 100px;
        }




    </style>
</head>
<body>
    <div class="wrapper">
        <div class="articulos">
            <?php
                //MOSTRAR ARTICULOS
                foreach ($articulos as $values){
                    echo "<div class='grid-card'>";
                    echo "<img src=".$values['foto'] ." ". "</img>";
                    echo "<h2>" . $values['nombre'] . "</h2> <span class='price'>" .$values['precio'] . "€</span>";
                    echo "<a href='carro.php?name=" . $values['id'] . "'><button class='btnCarro'>" . "Añadir al carrito" . "</button></a>";
                    echo "</div>";
                }
            ?>  
        </div>
    </div>
    
</body>
</html>