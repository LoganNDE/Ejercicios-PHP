<?php
    session_start();
    $userRemember = isset($_SESSION['userRemember']) ? $_SESSION['userRemember'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inicio de sesión exitoso</title>
    <style>
        .center-content {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .success-icon {
            font-size: 100px;
            color: green;
        }
    </style>
</head>
<body>
    <div class="container center-content">
        <div class="text-center">
            <div class="success-icon">
                &#10004;
            </div>
            <h1 class="text-success">Inicio de sesión exitoso</h1>
            <p class="lead">Bienvenido de nuevo <?php echo $userRemember?>, has iniciado sesión correctamente.</p>
            <a href="index.php" class="btn btn-success">Ir al Inicio</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
