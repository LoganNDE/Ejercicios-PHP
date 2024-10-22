<?php
    session_start();
    session_destroy();
    header("Location: agregarAlumnos-view.php");
?>