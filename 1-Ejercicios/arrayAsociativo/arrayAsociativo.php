<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteo de Sexo Aleatorio</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            color: #2c3e50;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            max-width: 60%;
            width: 100%;
            text-align: center;
            transition: all 0.3s ease;
        }

        .container:hover {
            transform: translateY(-10px);
        }

        h1 {
            font-size: 2.5em;
            color: #34495e;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .result {
            font-size: 1.4em;
            color: #2980b9;
            margin-top: 15px;
            padding: 20px;
            background-color: #f0f4f8;
            border-radius: 10px;
        }

        .highlight {
            font-weight: bold;
            color: #e74c3c;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 2em;
            }

            .result {
                font-size: 1.1em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Conteo de Sexo Aleatorio</h1>
        <div class="result">
            <?php 

                $contadorMax = 100;
                $contador = 0;
                $listadoSexo = [];

                while ($contador <= $contadorMax) {
                    $numRandom = rand(1, 2);
                    switch ($numRandom) {
                        case 1:
                            array_push($listadoSexo, "M");
                            break;
                        case 2:
                            array_push($listadoSexo, "F");
                            break;
                    }

                    $contador++;
                }

                print_r($listadoSexo);

            ?>
        </div>
    </div>
</body>
</html>
