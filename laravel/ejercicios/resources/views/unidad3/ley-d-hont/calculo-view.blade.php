<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Escaños</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="text-center my-4">Resultados de los Escaños</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Votos</th>
                <?php 
                foreach ($nombrePartido as $partido) { 
                    echo "<th>$partido</th>";
                } 
                ?>
            </tr>
        </thead>
            <tr>
                <td>Votos Totales</td>
                <?php 
                foreach ($combinacionPartidos as $votos) { 
                    echo "<td>" . $votos . "</td>";
                } 
                ?>
            </tr>
            <?php 
            for ($i = 0; $i < $numeroEscanyos; $i++) { 
                echo "<tr>";
                echo "<td>Escaño " . ($i + 1) . "</td>";
                foreach ($totalEscanyos as $escanios) {
                    // Comprueba si el escaño está en la lista de los mayores y aplica la clase si es necesario
                    if (in_array($escanios[$i], $listaNumeroMayores)) {
                        echo '<td class="bg-warning">' . $escanios[$i] . '</td>';
                    } else {
                        echo '<td>' . $escanios[$i] . '</td>';
                    }
                }
                echo "</tr>";
            } 
            ?>
    </table>
    <div class="container d-flex justify-content-center">
    <a href="{{ url('ejercicios/unidad3/ley-d-hont') }}" class="btn btn-primary">Volver al formulario</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
