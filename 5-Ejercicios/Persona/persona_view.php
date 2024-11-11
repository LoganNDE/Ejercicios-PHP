<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Persona</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
            include("Objects/Persona.php");
            include("Objects/Alumno.php");
            $Logan = new Persona("66666633J", "Logan", "logannaranjo4@gmail.com");
            $Maria = new Alumno("66666633J", "Maria", "marianoggg@gmail.com", "882732329");

            $Maria->setNombre("Mario");

            echo '
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Detalles del usuario</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>DNI:</strong> ' . $Logan->getDni() . '</p>
                    <p class="card-text"><strong>Name:</strong> ' . $Logan->getNombre() . '</p>
                    <p class="card-text"><strong>Email:</strong> ' . $Logan->getEmail() . '</p>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>DNI:</strong> ' . $Maria->getDni() . '</p>
                    <p class="card-text"><strong>Name:</strong> ' . $Maria->getNombre() . '</p>
                    <p class="card-text"><strong>Email:</strong> ' . $Maria->getEmail() . '</p>
                    <p class="card-text"><strong>Numero de expediente:</strong> ' . $Maria->getNumExpediente() . '</p>
                </div>
            </div>';
        ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
