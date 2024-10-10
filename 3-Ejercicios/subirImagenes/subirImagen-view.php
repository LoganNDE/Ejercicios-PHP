<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incagram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .gallery-img {
            object-fit: cover;
            height: 250px;
            width: 100%;
            border-radius: 15px;
        }
        .gallery-card {
            border: none;
            transition: transform 0.2s;
        }
        .gallery-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="container my-5">
    <h1 class="text-center mb-5">Galería de Imágenes</h1>
    <div class="row justify-content-center">

        <?php
        $ruta = "imagenes/";
        $imagenesGuardadas = scandir($ruta);
        foreach($imagenesGuardadas as $imagenes){
            if ($imagenes !== "." && $imagenes !== ".."){
                echo '
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center">
                    <div class="card gallery-card">
                        <img src="'. $ruta.$imagenes . '" class="gallery-img" alt="Imagen">
                    </div>
                </div>';
            }
        }
        ?>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
