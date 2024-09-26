<?php include ("casasRurales.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas Rurales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container my-4">
        <h1 class="text-center">Lista de Casas Rurales</h1>

        <div class="alert alert-danger">
            <?php
                $numeroNull = 0;
                foreach ($datosAsociativos as $datos) {
                    if (strlen($datos["telefono"]) == 0) {
                        $numeroNull++;
                    }
                }
                echo "Se han descartado " . $numeroNull . " teléfonos con valores nulos";
            ?>
        </div>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Localidad</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($datosAsociativos as $datos) {
                        if (strlen($datos["telefono"]) != 0){
                            echo "<tr>";
                            echo "<td>" . $datos["id"] . "</td>";
                            echo "<td>" . $datos["localidad"] . "</td>";
                            echo "<td>" . $datos["nombre"] . "</td>";
                            echo "<td>" . $datos["telefono"] . "</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
