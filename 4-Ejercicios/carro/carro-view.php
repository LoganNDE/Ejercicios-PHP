<?php include("articulos.php");
include("carro.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style.css">
    <title>Carrito</title>
</head>
<body>
    <div class="wrapper">
        <header class="cabecera">
            <?php include("modules/header.php") ?>
        </header>
        <table class="tablaCarrito">
            <thead class="cabeceraTabla">
                <tr>
                    <td>Imagen</td>
                    <td>Producto</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                </tr>
            </thead>
            <?php
                $precioTotal = 0;
                $idRepetidos = [];
                $cantidadArticulo = 0;
                //MOSTRAR CARRITO
                foreach ($_SESSION['carroTotal'] as $articulo) {
                    $idArticulo = $articulo['id'];

                    if (!in_array($idArticulo, $idRepetidos)) {
                        $cantidadArticulo = array_count_values(array_column($_SESSION['carroTotal'], 'id'))[$idArticulo];
                        echo "<tr class='filaTCarro'>";
                        echo "<td class='ColumnaTCarro'><img class='fotoCarro' src='" . htmlspecialchars($articulo['foto']) . "' alt='" . htmlspecialchars($articulo['nombre']) . "'></td>";
                        echo "<td class='ColumnaTCarro'>" . $articulo['nombre'] . "</td>";
                        echo "<td class='ColumnaTCarro'>" . $articulo['precio'] ."€</td>";
                        echo "<td class='ColumnaTCarro'>" . $cantidadArticulo . "</td>";
                        echo "</tr>";
                        array_push($idRepetidos, $idArticulo);
                    }
                    $precioTotal += $articulo['precio'];

                }
            ?>
        </table>
        <div class="containerPrecioTotal">
            <h2>Precio total: </h2> <span class="precioTotal"> <?php echo $precioTotal; ?>€</span>
        </div>
    </div>
</body>

</html>