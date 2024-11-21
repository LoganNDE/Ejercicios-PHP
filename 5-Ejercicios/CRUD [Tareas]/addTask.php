<?php
include("ddbbConex.inc.php");
// Capturar los datos enviados desde el formulario
$nameTask = isset($_POST['nameTask']) ? $_POST['nameTask'] : '';
$timeTask = isset($_POST['timeTask']) ? $_POST['timeTask'] : '';
$priority = isset($_POST['priority']) ? $_POST['priority'] : '';
$statusTask = isset($_POST['statusTask']) ? $_POST['statusTask'] : '';
$descriptionTask = isset($_POST['descriptionTask']) ? $_POST['descriptionTask'] : '';

// Opcional: Imprimir para verificar los datos
 echo "Nombre de la tarea: $nameTask";
 echo "Duración: $timeTask";
 echo "Prioridad: $priority";
 echo "Estado de la tarea: $statusTask";
 echo "Descripción: $descriptionTask";

 $instruction = $pdo -> prepare("INSERT INTO task (title, time_task, priority, status_task, description) VALUES (:title, :time_task, :priority, :status_task, :description)");
 $instruction -> bindParam(':title', $nameTask);
 $instruction -> bindParam(':time_task', $timeTask);
 $instruction -> bindParam(':priority', $priority);
 $instruction -> bindParam(':status_task', $statusTask);
 $instruction -> bindParam(':description', $descriptionTask);
 $instruction -> execute();
?>