<?php
    include ("config/ddbbConex.inc.php");
     $idDelete = $_REQUEST['id'];

    if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($idDelete)){

        try {
            $consulta = $pdo -> prepare('DELETE FROM task where id = :id');
            $consulta -> bindParam(":id", $idDelete);
            $consulta -> execute();
        }catch(PDOException $e){
            echo "Mensaje de error: " . $e;
            $errorDelete = true;
        }

        if (!isset($errorDelete)){
            header("Location: index.php");
            exit();
        }
        
    }
?>