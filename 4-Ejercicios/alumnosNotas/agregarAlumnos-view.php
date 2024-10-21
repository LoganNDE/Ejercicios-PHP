<?php include("alumnos.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Alumnos | Calificaciones</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            font-size: 14px;
            color: #333;
            margin-top: 10px;
            display: block;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Estilos para la tabla de alumnos */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }

        .table-container {
            margin-top: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 600px;
        }

    </style>
</head>
<body>
    <form action="alumnos.php" method="post">
        <label for="nombreAlumno">Alumnos</label>
        <input type="text" name="nombre" id="nombreAlumno" placeholder="Nombre del alumno">

        <label for="nota1">Nota 1</label>
        <input type="number" name="notas[]" id="nota1" placeholder="Nota 1">

        <label for="nota2">Nota 2</label>
        <input type="number" name="notas[]" id="nota2" placeholder="Nota 2">

        <label for="nota3">Nota 3</label>
        <input type="number" name="notas[]" id="nota3" placeholder="Nota 3">

        <button type="submit">Enviar</button>
    </form>

    <?php
        if (isset($_SESSION['alumnos'])) {
            echo '<div class="table-container">';
            echo '<table>';
            echo '<tr><th>Nombre</th><th>Nota 1</th><th>Nota 2</th><th>Nota 3</th></tr>';

            foreach ($_SESSION['alumnos'] as $alumno) {
                echo '<tr>';
                echo '<td>' . $alumno['nombre'] . '</td>';
                foreach ($alumno['notas'] as $nota) {
                    echo '<td>' . $nota . '</td>';
                }
                echo '</tr>';
            }

            echo '</table>';
            echo '</div>';
        }
    ?>
</body>
</html>
