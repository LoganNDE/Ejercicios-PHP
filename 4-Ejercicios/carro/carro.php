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
        $_SESSION['totalCarro'] = 0;

        $articulos = array(
            array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
            array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
            array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
            array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio"
            => 20)
            );
    ?>    


    <div class="wrapper">

        <ul>
            <?php
                $lisID = [];
                foreach ($articulos as $values){
                    echo "<a href='carro.php?name=" . $values['id'] . "'><li>" . $values['nombre'] . " " . $values['precio'] . "</li></a>";
                    array_push($lisID, $values['id']);
                }

            
                if (($_SERVER['REQUEST_METHOD'] === 'GET') && (isset($_GET['name']))){
                    echo $_GET['name'];
                }


            
            ?>




        </ul>
    </div>


</body>
</html>