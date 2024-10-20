<?php
    session_start();
    session_destroy();
    header("Location: articulos-view.php")
?>