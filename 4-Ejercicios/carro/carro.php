    <?php
        include("articulos.php");
        session_start();
        if (($_SERVER['REQUEST_METHOD'] === 'GET')){
            
            if (!isset($_SESSION['carroTotal'])){
                    $_SESSION['carroTotal'] = [];
            }

            if (isset($_GET['name'])){
                foreach ($articulos as $articulo){
                    if ($articulo['id'] == $_GET['name']){
                        array_push($_SESSION['carroTotal'], $articulo);
                        header("Location:articulos-view.php");
                    }
                }
            }
        }
    ?>