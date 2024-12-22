<?php
require_once "Controllers/BurgerController.php";
session_start();
$_SESSION['user'] = isset($_SESSION['user']) ? $_SESSION['user'] : "user";


    $controller = new BurgerController();

    $action = isset($_GET['action']) ? $_GET['action'] : 'home';
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    switch ($action) {
        case 'home':
            $controller->indexCategories();
            break;
        case 'products';
            $controller->indexItems($id);
            break;
        case 'editCategorie':
            $controller->editCategroies($id);
            break;
        case 'editItem':
            $controller->editItems($id);
            break;
    }