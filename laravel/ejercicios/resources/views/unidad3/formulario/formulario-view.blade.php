<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Formulario de Resultados</h2>
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $nombre; ?></td>
                    <td><?php echo $apellidos; ?></td>
                </tr>
                <tr>
                    <th colspan="2">Website</th>
                </tr>
                <tr>
                    <td colspan="2"><?php echo $websiteURL; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <th>Número de Miembros</th>
                </tr>
                <tr>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $numberMembers; ?></td>
                </tr>
                <tr>
                    <th>Género</th>
                    <th>Aficiones</th>
                </tr>
                <tr>
                    <td><?php echo $gender; ?></td>
                    <td>
                        <ul class="list-group">
                            <?php
                                if (count($aficiones) > 0){
                                    foreach ($aficiones as $aficion){
                                        echo "<li>" . $aficion .  "</li>";
                                    }
                                }else{
                                    echo "N/A";
                                }
                                
                            ?>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">Menú Favorito</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <ul class="list-group">
                            <?php
                                if (count($aficiones) > 0){
                                    foreach ($menu as $comida){
                                        echo "<li>" . $comida .  "</li>";
                                    }
                                }else{
                                    echo "N/A";
                                }                                    
                            ?>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
