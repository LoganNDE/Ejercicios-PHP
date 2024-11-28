<?php    
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


?>