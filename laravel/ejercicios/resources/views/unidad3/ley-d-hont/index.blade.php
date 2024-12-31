<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ley d'Hont</title>

    <style>

        .main{
            height: 100vh;
        }

    </style>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Cálculo de la Ley D'Hondt</h1>
        <form method="POST" action="calculo-view.php" class="mb-4">
          <div class="row">
            <div class="col-md-6">
              <label for="partido1" class="form-label">Partido 1 - Nombre</label>
              <input type="text" class="form-control" id="partido1" name="nombrePartido[]" placeholder="Nombre del Partido 1" requirede>
            </div>
            <div class="col-md-6">
              <label for="votos1" class="form-label">Partido 1 - Votos</label>
              <input type="number" class="form-control" id="votos1" name="votosPartido[]" placeholder="Votos del Partido 1" requirede>
            </div>
          </div>
    
          <div class="row mt-3">
            <div class="col-md-6">
              <label for="partido2" class="form-label">Partido 2 - Nombre</label>
              <input type="text" class="form-control" id="partido2" name="nombrePartido[]" placeholder="Nombre del Partido 2" requirede>
            </div>
            <div class="col-md-6">
              <label for="votos2" class="form-label">Partido 2 - Votos</label>
              <input type="number" class="form-control" id="votos2" name="votosPartido[]" placeholder="Votos del Partido 2" requirede>
            </div>
          </div>
    
          <div class="row mt-3">
            <div class="col-md-6">
              <label for="partido3" class="form-label">Partido 3 - Nombre</label>
              <input type="text" class="form-control" id="partido3" name="nombrePartido[]" placeholder="Nombre del Partido 3" requirede>
            </div>
            <div class="col-md-6">
              <label for="votos3" class="form-label">Partido 3 - Votos</label>
              <input type="number" class="form-control" id="votos3" name="votosPartido[]" placeholder="Votos del Partido 3" requirede>
            </div>
          </div>
    
          <div class="row mt-3">
            <div class="col-md-6">
              <label for="partido4" class="form-label">Partido 4 - Nombre</label>
              <input type="text" class="form-control" id="partido4" name="nombrePartido[]" placeholder="Nombre del Partido 4" requirede>
            </div>
            <div class="col-md-6">
              <label for="votos4" class="form-label">Partido 4 - Votos</label>
              <input type="number" class="form-control" id="votos4" name="votosPartido[]" placeholder="Votos del Partido 4" requirede>
            </div>
          </div>
    
          <div class="mt-4">
            <label for="escanos" class="form-label">Número de Escaños a repartir</label>
            <input type="number" class="form-control" id="escanos" name="escanos" requirede>
          </div>
    
          <button type="submit" class="btn btn-primary mt-4">Calcular</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>