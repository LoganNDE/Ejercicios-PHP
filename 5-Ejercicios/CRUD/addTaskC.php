<?php
include("config/ddbbConex.inc.php");
// Capturar los datos enviados desde el formulario
$nameTask = isset($_POST['nameTask']) ? $_POST['nameTask'] : NULL;
$timeTask = isset($_POST['timeTask']) ? $_POST['timeTask'] : NULL;
$priority = isset($_POST['priority']) ? $_POST['priority'] : NULL;
$statusTask = isset($_POST['statusTask']) ? $_POST['statusTask'] : NULL;
$descriptionTask = isset($_POST['descriptionTask']) ? $_POST['descriptionTask'] : NULL;

    try{
        $instruction = $pdo -> prepare("INSERT INTO task (title, time_task, priority, status_task, description) VALUES (:title, :time_task, :priority, :status_task, :description)");
        $instruction -> bindParam(':title', $nameTask);
        $instruction -> bindParam(':time_task', $timeTask);
        $instruction -> bindParam(':priority', $priority);
        $instruction -> bindParam(':status_task', $statusTask);
        $instruction -> bindParam(':description', $descriptionTask);
        $instruction -> execute();
    }catch(Exception $e){
        echo "Mensaje de error: " . $e;
        $errorOcurred = true;
    }

    if (!isset($errorOcurred)){
        echo "Se ha agregado correctamente la tarea";
        header("Location: index.php");
        exit();
    }



    
 
?>