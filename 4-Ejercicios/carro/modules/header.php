<?php
    echo "<a href='articulos-view.php'><h1>Pepe's Shop</h1></a>";
    echo "<div class='iconosHeader'>";
    echo "<a href='carro-cerrar.php'><span class='iconoSalir'></span></a>";
    echo "<span class=numProductos>" . count($_SESSION['carroTotal']) . "</span>";
    echo "<a href='carro-view.php'><span class='iconoCarro'></span></a>";
    echo "</div>";
?>