<?php include ("articulos.php");
        include("carro.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style.css">
    <title>Decathlon | Poyecto Carro</title>
</head>
<body>
    <div class="wrapper">
        <header class="cabecera">
            <?php include("modules/header.php") ?>
        </header>
        
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