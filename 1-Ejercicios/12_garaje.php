<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documedasdasdsnt</title>
</head>
<body>

<?php
// defino un array  
$coche = array(
    "111BCD" => array("ford","focus",5),
    "222BCD" => array("Toyota","corolla",5),
    "333BCD" => array("Honda",4),
    "444BCD" => array("kia","rio",4)
)

?>
<table>
    <tr>
        <th>
            matricula
        </th>
        <th>marca</th>
        <th>
            modelo
        </th>
        <th>
            puerta
        </th>
    </tr>
    <?php


         foreach ($coche as $matricula => $detalles) {

            echo "<tr>";
            echo "<td>" . $matricula . "</td>";
            echo "<td>" . $detalles[0] . "</td>";
            echo "<td>" . $detalles[1] . "</td>";
            echo "<td>" . $detalles[2] . "</td>";
            echo "</tr>";}
    ?>
</table>
    
</body>
</html>
