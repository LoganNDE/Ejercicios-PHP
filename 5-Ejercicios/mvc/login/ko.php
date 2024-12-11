<?php
    header("Refresh:5; url=login.html");  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Error de inicio de sesión</title>
    <style>
        .center-content {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .error-icon {
            font-size: 100px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container center-content">
        <div class="text-center">
            <div class="error-icon">
                &#10060;
            </div>
            <h1 class="text-danger">Error al iniciar sesión</h1>
            <p class="lead">Usuario o contraseña incorrectos. Por favor, intenta de nuevo.</p>
            <p class="lead">Serás redireccionado en 5 segundos.</p>

            <a href="login.html" class="btn btn-danger">Volver al Login</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
