    <?php
        include("articulos.php");
        session_start();
        if (($_SERVER['REQUEST_METHOD'] === 'GET') && (isset($_GET['name']))){
            
            if (!isset($_SESSION['carroTotal'])){
                    $_SESSION['carroTotal'] = [];
            }

            foreach ($articulos as $articulo){
                if ($articulo['id'] == $_GET['name']){
                    array_push($_SESSION['carroTotal'], $articulo);
                    header("Location:articulos-view.php");
                }
            } 
        }
    ?>