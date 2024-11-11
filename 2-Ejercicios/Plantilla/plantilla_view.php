<?php include("plantilla.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container my-4">

<h2 class="mb-4">Tabla Resumida</h2>
<table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>Dorsal</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Posición</th>
            <th>Equipo</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($vector as $key) {
        echo "<tr>";
        echo "<td>" . $key[11] . "</td>";
        echo "<td>" . $key[4] . "</td>";
        echo "<td>" . $key[5] . "</td>";
        echo "<td>" . $key[10] . "</td>";
        echo "<td>" . $key[1] . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>


<h2 class="mb-4">Tabla Completa - Filtrada (Atlético de Madrid)</h2>
<table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>Temporada</th>
            <th>Equipo</th>
            <th>Id</th>
            <th>Apodo</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Fecha</th>
            <th>Edad</th>
            <th>Localidad</th>
            <th>País</th>
            <th>Posición</th>
            <th>Dorsal</th>
            <th>PJ</th>
            <th>PT</th>
            <th>PC</th>
            <th>PS</th>
            <th>Minutos</th>
            <th>Goles</th>
            <th>TA</th>
            <th>TR</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($arrayAsociativo as $value) {
        if ($value["Equipo"] == "Atlético de Madrid") {
            echo "<tr>";
            echo "<td>" . $value["Temporada"] . "</td>";
            echo "<td>" . $value["Equipo"] . "</td>";
            echo "<td>" . $value["Id"] . "</td>";
            echo "<td>" . $value["Apodo"] . "</td>";
            echo "<td>" . $value["Nombre"] . "</td>";
            echo "<td>" . $value["Apellidos"] . "</td>";
            echo "<td>" . $value["Fecha"] . "</td>";
            echo "<td>" . $value["Edad"] . "</td>";
            echo "<td>" . $value["Localidad"] . "</td>";
            echo "<td>" . $value["Pais"] . "</td>";
            echo "<td>" . $value["Posicion"] . "</td>";
            echo "<td>" . $value["Dorsal"] . "</td>";
            echo "<td>" . $value["PJ"] . "</td>";
            echo "<td>" . $value["PT"] . "</td>";
            echo "<td>" . $value["PC"] . "</td>";
            echo "<td>" . $value["PS"] . "</td>";
            echo "<td>" . $value["M"] . "</td>";
            echo "<td>" . $value["G"] . "</td>";
            echo "<td>" . $value["TA"] . "</td>";
            echo "<td>" . $value["TR"] . "</td>";
            echo "</tr>";
        }
    }
    ?>
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></body>
</html>
