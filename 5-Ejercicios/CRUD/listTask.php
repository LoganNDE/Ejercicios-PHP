<?php include_once ("config/ddbbConex.inc.php");

$data = [];
$consulta = $pdo -> prepare("SELECT * FROM task");
$consulta -> setFetchMode(PDO::FETCH_ASSOC);
$consulta -> execute();

while ($row = $consulta ->fetch()){
    array_push($data, $row);
}
?>


