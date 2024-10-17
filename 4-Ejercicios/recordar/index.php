<?php
  session_start();
  $userRemember = isset($_SESSION['userRemember']) ? $_SESSION['userRemember'] : '';
  $passwordRemember = isset($_SESSION['passwordRemember']) ? $_SESSION['passwordRemember'] : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
    <style>
      .wrapper {
        height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .form-container {
        max-width: 400px;
        width: 100%;
      }
    </style>
</head>
<body>
    <div class="container p-5 wrapper">
        <div class="row d-flex justify-content-center align-items-center form-container">
          <div class="col bg-light rounded border p-4">
            <form action="login-check.php" method="POST">
              <div class="form-group">
                <label for="user">Usuario</label>
                <input type="text" class="form-control" id="user" value="<?php echo $userRemember; ?>" name="user" placeholder="Ingresa tu usuario" require>
              </div>
              <div class="form-group pt-3 pb-1">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" value="<?php echo $passwordRemember; ?>" name="password" placeholder="Contraseña" require>
              </div>
              <div class="form-check pb-3">
                <input class="form-check-input" type="checkbox" name="remember">
                <label class="form-check-label">
                  Acuérdate de mí
                </label>
              </div>
              <button type="submit" class="btn btn-primary w-45">Iniciar sesión</button>
            </form>
          </div>
        </div>
      </div>      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
