<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">




    
</head>
<body>
    
    <?php

        $amigos = [
            [
                "nombre" => "Enris",
                "altura" => 1.85,
                "email" => "ensrisscozz@gmail.com",
                "telefono" => "61111111"
            ],
            [
                "nombre" => "Carlos",
                "altura" => 1.75,
                "email" => "carlosmorata22@hotmail.com",
                "telefono" => "61111111"
            ],
            [
                "nombre" => "Laura",
                "altura" => 1.68,
                "email" => "laurapilo2m@gmail.com.com",
                "telefono" => "61111111"
            ],
            [
                "nombre" => "Sofia",
                "altura" => 1.70,
                "email" => "sofiaart9@gmail.com",
                "telefono" => "61111111"
            ],
            [
                "nombre" => "Diego",
                "altura" => 1.80,
                "email" => "diegete1997@hotmail.com",
                "telefono" => "61111111"
            ]
        ];

        print_r($amigos);

    ?>

        <div class="container-sm mt-5">
        <table class="table table-bordered">
        <thead>
            <tr>
                <th colspan="4" class="text-center">Mis mejores amigos</th>
            </tr>
            <tr>
                <th>Nombre</th>
                <th>Altura</th>
                <th>Email</th>
                <th>Teléfono</th>
            </tr>




        </thead>
            

            <?php
            
                for ($indice = 0; $indice < count($amigos); $indice++){
                    print "<tr>" .
                        "<th>" . $amigos[$indice]["nombre"] . "</th>" .
                        "<th>" . $amigos[$indice]["altura"] . "</th>" .
                        "<th>" . $amigos[$indice]["email"] . "</th>" .
                        "<th>" . $amigos[$indice]["telefono"] . "</th>" .
                    "</tr>";
                }




            
            ?>


        </table>

        </div>
        



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>