<?php   
    include("config/ddbbConex.inc.php");
    
    
    function getData($id){
        include("config/ddbbConex.inc.php");
        $consulta = $pdo -> prepare("SELECT * FROM task WHERE id = :id");
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> bindParam(":id", $id);
        $consulta -> execute();

        while ($register = $consulta ->fetch()){
            $data = $register;
        }
        return $data;
    }


    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_COOKIE['idEdit'])){

        try{
            $consulta = $pdo -> prepare("UPDATE task SET title = :titulo, time_task = :time_task, priority = :priority, status_task = :status_task, description = :description  where id = :id");
            $consulta -> bindParam(':titulo', $_REQUEST['nameTask']);
            $consulta -> bindParam(':time_task', $_REQUEST['timeTask']);
            $consulta -> bindParam(':priority', $_REQUEST['priority']);
            $consulta -> bindParam(':status_task', $_REQUEST['statusTask']);
            $consulta -> bindParam(':description', $_REQUEST['descriptionTask']);
            $consulta -> bindParam(':id', $_COOKIE['idEdit']);
            $consulta -> execute();
        }catch(PDOException $a){
            echo "Se ha porducido un error a la hora de actaulizar la tarea. <br>";
            echo "Mensje de error: " . $a;
            $error = true;
        }

        if (!isset($error)){
            header("Location: index.php");            
        }
        
    } 
    
    


?>