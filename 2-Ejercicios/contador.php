<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador con funciones</title>
</head>
<body>

    <?php

    function contar($incio, $fin){
        for ($incio; $incio <= $fin ; $incio++){
            if ($incio == $fin){
                print $incio;
            }else{
                print $incio . ",";
            }
        }
    }   


    contar(10, 20);
    
    
    ?>

    
</body>
</html>
