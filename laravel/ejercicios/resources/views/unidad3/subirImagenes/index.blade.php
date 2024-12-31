<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Destaca tu momento favorito en Incangram</h5>
                        <form method="post" action="subirImagen.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Formatos aceptados: [SVG, PNG, JPG, JPEG]</label>
                                <input class="form-control" type="file" name="formFile" id="formFile">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Subir</button>
                        </form>
                        <a class="btn btn-primary w-100 mt-2" href="subirImagen-view.php">Ver imagenes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
