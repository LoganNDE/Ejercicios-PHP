<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){       
        //Guardamos la informacion del usuario en un array para facilitar el uso y comporbacion de los datos de forma simple
        $userData = ['user' => $_REQUEST['user'], 'password' => $_REQUEST['password'], 'remeberUser' => isset($_REQUEST['remember']) ? true : false];
        
        //Verificamos si el login es correcto
        $loginCheck = ($userData['user'] == "admin") && ($userData['password'] == "123");


        if ($loginCheck) {
            if ($userData['remeberUser']){
                session_start();
                $_SESSION['userRemember'] = $userData['user'];
                $_SESSION['passwordRemember'] = $userData['password'];
            }
            header("Location: ok.php");
        }else{
            header("Location: ko.php");

        }
    }else{
        echo "No has iniciado sesion";
    }
?>