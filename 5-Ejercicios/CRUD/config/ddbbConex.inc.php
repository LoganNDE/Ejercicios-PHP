<?php
    $dsn = 'mysql:dbname=ddbb_task;host=127.0.0.1';
    $usuario = 'root';
    $contraseña = '';
try {
    $pdo = new PDO($dsn, $usuario, $contraseña);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //PDO::ATTR_ERRMODE indicándole a PHP que queremos un reporte de errores.
    //PDO::ERRMODE_EXCEPTION con este atributo obligamos a que lance excepciones, además de ser la opción más humana y legible
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
?>