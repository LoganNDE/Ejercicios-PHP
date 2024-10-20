<?php include("articulos.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        session_start();
        if (($_SERVER['REQUEST_METHOD'] === 'GET') && (isset($_GET['name']))){
            
            if (!isset($_SESSION['carroTotal'])){
                    $_SESSION['carroTotal'] = [];
            }

            //SUMA DE LOS PRECIOS DE ARTICULOS
            foreach ($articulos as $articulo){
                if ($articulo['id'] == $_GET['name']){
                    array_push($_SESSION['carroTotal'], $articulo) ;
                    $_SESSION['precioTotal'] += $articulo['precio'];
                }
            } 
        }

    ?>    


    <div class="wrapper">
        <div class="articulos">
            <ul>
                <?php
                    //MOSTRAR ARTICULOS
                    foreach ($articulos as $values){
                        echo "<a href='carro.php?name=" . $values['id'] . "'><li>" . $values['nombre'] . " " . $values['precio'] . "</li></a>";
                    }
                ?>
            </ul>
        </div>

        <div class="carrito">
            <ul>
                <?php
                    $precioTotal = 0;
                    //MOSTRAR CARRITO
                    foreach ($_SESSION['carroTotal'] as $articulo){
                        echo "<li>" . $articulo['nombre'] . " -> ". $articulo['precio'] . "</li>";
                        $precioTotal += $articulo['precio'];
                    }
                    echo $precioTotal;

                ?>
            </ul>
        </div>

        
    </div>


</body>
</html>