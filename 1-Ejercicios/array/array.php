<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Números Aleatorios</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
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
            width: 60%;
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

        .number-list {
            background-color: #f0f4f8;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            font-size: 1.2em;
            letter-spacing: 1px;
            line-height: 1.8;
            color: #2c3e50;
        }

        .result {
            font-size: 1.4em;
            color: #2980b9;
            margin-top: 15px;
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

            .number-list, .result {
                font-size: 1.1em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Números Aleatorios</h1>
        <?php

            $numList = [];
            $numTotalRepetidos = 0;

            function comprobarNumRepetido($numList, $numRandom){
                $repetido = false;
                if (in_array($numRandom, $numList)){
                    $repetido = true;
                }

                return $repetido;
            }
            
            while (count($numList)  <= 50){
            
                $numRandom = rand(0,99);
                if (comprobarNumRepetido($numList, $numRandom)){
                    $numTotalRepetidos++;
                    continue;
                }else{
                    array_push($numList, $numRandom);
                }
            }

            sort($numList);

            echo "<div class='number-list'>";
            print_r($numList);
            echo "</div>";

            echo "<div class='result'><br>" . 
                 "Número menor: <span class='highlight'>" . min($numList) . "</span><br>" .
                 "Número mayor: <span class='highlight'>" . max($numList) . "</span><br>" .
                 "Promedio: <span class='highlight'>" . (array_sum($numList)/count($numList)) . "</span><br> " .
                 "Números repetidos omitidos: <span class='highlight'>" . $numTotalRepetidos . "</span></div>";
            
        ?>
    </div>
</body>
</html>
