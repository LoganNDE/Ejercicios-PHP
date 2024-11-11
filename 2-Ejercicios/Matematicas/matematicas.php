<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas</title>
</head>
<body>
    <?php

        function digitos(int $numero) : int {
            $cadena = strval($numero);
            return strlen($cadena);
        }

        function digitoN(int $num, int $pos) {
            $cadena = strval($num);
            if ($pos > 0 && $pos <= strlen($cadena)) {
                return intval($cadena[$pos - 1]);
            }
            return -1;
        }

        function quitaPorDetras(int $num, int $cant) : int {
            $cadena = strval($num);
            $cadena = substr($cadena, 0, -$cant);
            return intval($cadena);
        }

        function quitaPorDelante(int $num, int $cant) : int {
            $cadena = strval($num);
            $cadena = substr($cadena, $cant);
            return intval($cadena);
        }

        $numero = 123456;
        echo "<h2>Ejemplos de funciones matemáticas</h2>";
        echo "<p>Número original: $numero</p>";
        echo "<p>Cantidad de dígitos: " . digitos($numero) . "</p>";
        echo "<p>Dígito en la posición 3: " . digitoN($numero, 3) . "</p>";
        echo "<p>Número después de quitar 2 dígitos por detrás: " . quitaPorDetras($numero, 2) . "</p>";
        echo "<p>Número después de quitar 2 dígitos por delante: " . quitaPorDelante($numero, 2) . "</p>";

    ?>
</body>
</html>
