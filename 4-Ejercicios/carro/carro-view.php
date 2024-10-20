<?php   include("articulos.php");
        include("carro.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <style>
        .tablaCarrito{
            border: solid 1px black;
        }

        .ColumnaTCarro{
            border: solid 1px black;
        }

    </style>
</head>

<body>

    <table class="tablaCarrito">
        <?php
        $precioTotal = 0;
        //MOSTRAR CARRITO
        foreach ($_SESSION['carroTotal'] as $articulo) {
            echo "<tr class='filaTCarro'>";
            echo "<td class='ColumnaTCarro'>" . $articulo['foto'] . "</td>";
            echo "<td class='ColumnaTCarro'>" . $articulo['nombre'] . "</td>";
            echo "<td class='ColumnaTCarro'>" . $articulo['precio'] . "</td>";
            echo "</tr>";
            $precioTotal += $articulo['precio'];
        }
        echo $precioTotal;

        ?>
    </table>

</body>

</html>