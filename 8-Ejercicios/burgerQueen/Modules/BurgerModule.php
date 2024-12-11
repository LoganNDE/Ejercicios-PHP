<?php
    require_once "Config/Conexion.php";
class BurgerModel { 

    private $pdo;

    public function __construct() {
        $database = new Conexion();
        $this->pdo = $database->conex();
    }

    public function getAllItems(){
        try{
            $query = "SELECT * FROM items";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }


    public function getAllCategories(){
        try{
            $query = "SELECT * FROM categories";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function getItems($id){
        try{
            $query = "SELECT * FROM items WHERE category = :id";
            $registro = $this->pdo->prepare($query);
            $registro ->bindParam(':id', $id);
            $registro->execute();
            return $registro->fetchAll();
        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getByIdCategories($id){
        try{
            $query = "SELECT * FROM items WHERE id = $id";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetch();
        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteByIdItems($id){
        try{
            $insercion = $this->pdo->prepare("delete from items where id=:id");
            $insercion->bindParam(':id', $id);
            return $insercion->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    
    public function deleteByIdCategories($id){
        try{
            $insercion = $this->pdo->prepare("delete from categories where id=:id");
            $insercion->bindParam(':id', $id);
            return $insercion->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function editItemsById($id,$name,$description,$price,$category): bool{
        try{
            $insercion = $this->pdo->prepare("update items set name=:name, description=:description, price=:price, image=:image, category=:category where id=:id");
            $insercion->bindParam(':id', $id);
            $insercion->bindParam(':name', $name);
            $insercion->bindParam(':description', $description);
            $insercion->bindParam(':price', $price);
            $insercion->bindParam(':image', $image);
            $insercion->bindParam(':category', $category);
            return $insercion->execute();;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function editCategoriesById($id,$name): bool{
        try{
            $insercion = $this->pdo->prepare("update categories set name=:name where id=:id");
            $insercion->bindParam(':id', $id);
            $insercion->bindParam(':name', $name);
            return $insercion->execute();;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function saveItem($name, $description, $price, $image, $category){
        try{
            $insercion = $this->pdo->prepare("INSERT INTO items(name,description,price,image,category) VALUES(:name, :description, :price, :image, :category)");
            $insercion->bindParam(':name', $name);
            $insercion->bindParam(':description', $description);
            $insercion->bindParam(':price', $price);
            $insercion->bindParam(':image', $image);
            $insercion->bindParam(':category', $category);
            return $insercion->execute();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    
    public function saveCategories($name){
        try{
            $insercion = $this->pdo->prepare("INSERT INTO categories(name) VALUES(:name)");
            $insercion->bindParam(':name', $name);
            return $insercion->execute();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

}