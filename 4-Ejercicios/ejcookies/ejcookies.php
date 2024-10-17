<?php
    $sesionInciada = isset($_COOKIE['user']);

    if ($sesionInciada){
        $userActive = $_COOKIE['user'];
        echo "Hola " . $userActive;
    }else{
        setcookie('user', 'Logan', time() + 1000); // La cookie será válida durante 1 hora    
        
    }


?>