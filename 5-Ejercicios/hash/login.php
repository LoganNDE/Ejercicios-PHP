<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usu = $_POST["login"];
    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute([$usu]);
    $usuario = $sentencia->fetch();
    if ($usuario && password_verify($_POST['pass'], $usuario['password'])) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>
<form method="post" action="login.php">
    <label for="login">Username:</label>
    <input type="text" id="login" name="login" required>
    <label for="pass">Password:</label>
    <input type="password" id="pass" name="pass" required>
    <button type="submit">Login</button>
</form>
