<?php include("loteria.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Euro-Millón</title>
</head>
<body>
    
    <div class="container-sm mt-5 bg-light p-5 rounded-4">
        <h1 class="pb-3">Resultados del Euromillón</h1>
        <h2 class="fs-5">Número premiado: </h2>
        <table class="table table-bordered">
            <tr>
                <?php
                    foreach (generarResultado(5, 50) as $numeros) {
                        echo "<td class='align-middle text-center'> <span class= 'numStyle text-center'>". $numeros .  " </span> </td>";
                    }
                    foreach (generarResultado(2, 9) as $numerosEstrella) {
                        echo "<td class='align-middle text-center'> <span class= 'estrellaStyle text-center'>". $numerosEstrella .  " </span> </td>";
                    }

                ?>
            </tr>
        </table>        

        <div class="d-flex justify-content-center mt-5 gap-4">
            <form method="post" action="">
                <button type="submit" name="generar" class="btn btn-dark">Generar resultado</button>
            </form>
            <a href="select_apuesta.php" class="btn btn-dark">Volver al inicio</a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>