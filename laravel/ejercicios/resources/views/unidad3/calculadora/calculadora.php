<?php
        if ($_SERVER["REQUEST_METHOD"] == "post"){
            if (!empty($_REQUEST['x']) && !empty($_REQUEST['x'])){
                $x = $_REQUEST['x'];
                $y = $_REQUEST['y'];
                
                echo "Valor X: " . $x . "<br>";
                echo "Valor Y: " . $y . "<br>";
                echo $x . " + " . $y . " = " . ($x + $y) . "<br>";
                echo $x . " - " . $y . " = " . ($x - $y) . "<br>";
                echo $y . " - " . $x . " = " . ($y + $x) . "<br>";
                echo $x . " * " . $y . " = " . ($x * $y) . "<br>";
            }
        }
       
    ?>