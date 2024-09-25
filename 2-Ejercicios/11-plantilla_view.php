<?php include("11-plantilla.php"); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!--Temporada,Equipo,Id,Apodo,Nombre,Apellidos,Fecha,Edad,Localidad,Pais,Posicion,Dorsal,PJ,PT,PC,PS,M,G,TA,TR!-->

<table>
    <thead>
        <th>Dorsal</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Posicion</th>
        <th>Equipo</th>
    </thead>
    <?php
    
    foreach ($vector as $key ) {

        //DORSAL, NOMBRE APELLIDO POSICION EQUIPO

        echo "<tr>";
        echo "<td>" . $key[11]  ."</td>";
        echo "<td>" . $key[4]  ."</td>";
        echo "<td>" . $key[5]  ."</td>";
        echo "<td>" . $key[10]  ."</td>";
        echo "<td>" . $key[1]  ."</td>";


        echo "</tr>";
    }
    
    
    ?>

        
        



</table>


<table>
    <thead>
        <th>Temporada</th>
        <th>Equipo</th>
        <th>Id</th>
        <th>Apodo</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Fecha</th>
        <th>Edad</th>
        <th>Localidad</th>
        <th>Pais</th>
        <th>Posicion</th>
        <th>Dorsal</th>
        <th>PJ</th>
        <th>PT</th>
        <th>PC</th>
        <th>PS</th>
        <th>M</th>
        <th>G</th>
        <th>TA</th>
        <th>TR</th>
    </thead>
    <?php
    
    foreach ($arrayAsociativo as $value) {
        print_r($value);

        echo "<tr>";
        echo "<td>" . $value["Temporada"]  ."</td>";
        echo "<td>" . $value["Equipo"]  ."</td>";
        echo "<td>" . $value["Id"]  ."</td>";
        echo "<td>" . $value["Apodo"]  ."</td>";
        echo "<td>" . $value["Nombre"]  ."</td>";
        echo "<td>" . $value["Apellidos"]  ."</td>";
        echo "<td>" . $value["Fecha"]  ."</td>";
        echo "<td>" . $value["Edad"]  ."</td>";
        echo "<td>" . $value["Localidad"]  ."</td>";
        echo "<td>" . $value["Pais"]  ."</td>";
        echo "<td>" . $value["Posicion"]  ."</td>";
        echo "<td>" . $value["Dorsal"]  ."</td>";
        echo "<td>" . $value["PJ"]  ."</td>";
        echo "<td>" . $value["PT"]  ."</td>";
        echo "<td>" . $value["PC"]  ."</td>";
        echo "<td>" . $value["PS"]  ."</td>";
        echo "<td>" . $value["M"]  ."</td>";
        echo "<td>" . $value["G"]  ."</td>";
        echo "<td>" . $value["TA"]  ."</td>";
        echo "<td>" . $value["TR"] ."</td>";
        echo "</tr>";


    }

    
    
    ?>
</table>


</body>
</html>