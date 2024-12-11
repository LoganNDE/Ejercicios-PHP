<?php
require_once "Modules/BurgerModule.php";

class BurgerController {
    private $burgerModel;

    public function __construct() {
        $this->burgerModel = new BurgerModel();
    }

    public function indexCategories() {
        $categories = $this->burgerModel->getAllCategories();
        require "View/home.php";
    }

    public function indexItems($id) {
        $items = $this->burgerModel->getItems($id);
        require "View/products.php";
    }


    public function editCategroies($id){
        if  ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $name = $_REQUEST['name'];
            $this->burgerModel->editCategoriesById($id, $name);
            header("Location: index.php");
            exit();
        }
        $categories = $this->burgerModel->getByIdCategories($id);
        require("admin/View/editCategories.php");
    }


    

    /*public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $titulo = $_POST['titulo'];
            $genero = $_POST['genero'];
            $precio = $_POST['precio'];
            $this->videojuegoModel->save($titulo, $genero, $precio);
            header("Location: index.php");
        } else {
            require "Views/create.php";
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $titulo = $_POST['titulo'];
            $genero = $_POST['genero'];
            $precio = $_POST['precio'];
            $this->videojuegoModel->update($id, $titulo, $genero, $precio);
            header("Location: index.php");
        } else {
            $videojuego = $this->videojuegoModel->getById($id);
            require "Views/edit.php";
        }
    }

    public function delete($id) {
        $this->videojuegoModel->delete($id);
        header("Location: index.php");
    }*/
}
