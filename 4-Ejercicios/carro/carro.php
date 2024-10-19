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
        $articulos = array(
            array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
            array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
            array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
            array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio"
            => 20)
            );

        
        if (($_SERVER['REQUEST_METHOD'] === 'GET') && (isset($_GET['name']))){
            
            echo $_GET['name'];
        if (!isset($_SESSION['carroTotal']) && !isset($_SESSION['precioTotal'])){
                $_SESSION['carroTotal'] = [];
                $_SESSION['precioTotal'] = 0;    
            }

            //SUMA DE LOS PRECIOS DE ARTICULOS
            foreach ($articulos as $articulo){
                if ($articulo['id'] == $_GET['name']){
                    array_push($_SESSION['carroTotal'], $articulo) ;
                    $_SESSION['precioTotal'] += $articulo['precio'];
                }
            }

            print_r($_SESSION['carroTotal']);
        
        }
            echo "<br>". $_SESSION['precioTotal'];

    ?>    


    <div class="wrapper">

        <ul>
            <?php
                foreach ($articulos as $values){
                    echo "<a href='carro.php?name=" . $values['id'] . "'><li>" . $values['nombre'] . " " . $values['precio'] . "</li></a>";
                }

        ?>

        </ul>
    </div>


</body>
</html>