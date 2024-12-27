<?php
require_once "Controllers/BurgerController.php";
session_start();
$_SESSION['user'] = isset($_SESSION['user']) ? $_SESSION['user'] : "user";


    $controller = new BurgerController();

    $action = isset($_GET['action']) ? $_GET['action'] : 'home';
    $mode = isset($_GET['mode']) && $_GET['mode'] == "edit" ? $_GET['mode'] : "delete";
    $id = isset($_GET['id']) ? $_GET['id'] : null;


    if ($mode == "edit"){
        $mode = "delete";
    }else{
        $mode = "edit";
    }



    switch ($action) {
        case 'home':
            $controller->indexCategories($mode);
            break;
        case 'products';
            $controller->indexItems($id, $mode);
            break;
        case 'editCategorie':
            $controller->editCategroies($id);
            break;
        case 'editItem':
            $controller->editItems($id);
            break;
        case 'removeCategorie':
            $controller->removeCategorie($id);
            break;
        case 'removeItem':
            $controller->removeItem($id);
            break;
        case 'addCategorie':
            $controller->addCategorie();
            break;
        case 'addItem':
            $controller->addItem($id);
            break;
    }