<?php
        session_start();
    

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        if ((!isset($_SESSION['alumnos']))){
            $_SESSION['alumnos'] = [];
        }

        $nombreAlumno = $_REQUEST['nombre'] ? $_REQUEST['nombre'] : null;
        $notas = $_REQUEST['notas'] ? $_REQUEST['nota'] : [];
        
        if (($nombreAlumno != null && $notas != []) || ($notas != [])){
            $alumnosList = ['nombre' => $nombreAlumno, 'notas' => $notas];
            array_push($_SESSION['alumnos'], $alumnosList);
            header("Location: agregarAlumnos-view.php");    
        }else{
            header("Location: agregarAlumnos-view.php");    
        }
        
    }

?>