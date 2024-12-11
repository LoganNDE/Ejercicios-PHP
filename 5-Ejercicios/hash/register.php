<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usu = $_POST["usuario"];
    $pas = $_POST["password"];
    $sql = "INSERT INTO usuarios(usuario, password) VALUES (:usuario, :password)";
    $sentencia = $conexion->prepare($sql);
    $passHash = password_hash($pas, PASSWORD_DEFAULT);
    $sentencia->bindParam(":usuario", $usu);
    $sentencia->bindParam(":password", $passHash);
    $isOk = $sentencia->execute();
    if ($isOk) {
        echo "Registration successful!";
    } else {
        echo "Error during registration.";
    }
}
?>
<form method="post" action="register.php">
    <label for="usuario">Username:</label>
    <input type="text" id="usuario" name="usuario" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Register</button>
</form>
