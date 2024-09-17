<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Circulo</title>
</head>
    <style>

        *{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .main{
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .container{
        border: 3px solid black;
        border-radius: 5px;
        height:40vh;
        width: 30%;
        display: flex;
        flex-direction: column;
        align-items: center;
        }

        svg {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: draw 4s ease forwards;
        }

        @keyframes draw {
            to {
            stroke-dashoffset: 0;
            }
        }

    </style>
<body>  

    <?php

        define ("PI", 3.1416);
        $radio = 3.5;
        $resultado = PI * $radio**2;

    ?>


    <div class="main">
        <div class="container">
            <svg width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <circle cx="100" cy="100" r="80" stroke="black" stroke-width="4" fill="none" />
            </svg>
            <h1><?php echo $resultado ?> CM</h1>
            
        </div>
    </div>



</body>
</html>

