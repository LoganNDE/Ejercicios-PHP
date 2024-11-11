<?php
include("Objects/class.articuloRebajado.php");
$articuloRebajado = new ArticuloRebajado('Bicicleta', 352.10, 20);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos Rebajados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    
    <div class="container col-lg-5 bg-white p-4 rounded shadow-sm text-center">
        <h2 class="mb-4">Artículo Rebajado</h2>
        <div>
            <?php echo $articuloRebajado;?>
            <div class="mt-4">
            <?php echo var_dump($articuloRebajado); ?>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
