<?php
require_once "Controllers/TaskController.php";
if (!isset($_SESSION["isLogin"])) {
    $_SESSION["isLogin"] = false;
}

if ($_SESSION['isLogin']){
    $controller = new VideojuegoController();

    // Detecta la acción solicitada en la URL
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    // Llama al método correspondiente en el controlador
    switch ($action) {
        case 'create':
            $controller->create();
            break;
        case 'edit':
            $controller->edit($id);
            break;
        case 'delete':
            $controller->delete($id);
            break;
        default:
            $controller->index();
            break;
        }

}else{
    header("Location: login/login.html");
    exit();
}