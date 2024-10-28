<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Resultado</title>
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
        padding: 20px;
        height:15vh;
        width: 30%;
        display: flex;
        flex-direction: column;
        align-items: center;
        }
    </style>
</head>
<body>
    

    <div class="main">
        <div class="container">
        <?php
                $num1 = 3;
                $num2 = 5;
                $num3 = 8;


                $num1 *= 4;
                echo "1-" . $num1 . "<br>";
                echo "2-" . intval($num1 <= $num2) . "<br>";
                echo "3-" . intval($num3 > $num1 and $num3 > $num2) . "<br>";
                echo "4-" . intval($num3 > $num1 or $num3 > $num2) . "<br>";
                echo "5-" . intval($num1 > $num2 xor $num1 > $num3) . "<br>";



                $num3--;
                echo $num3  . "<br>";
                $num3 += $num1;
                echo $num3  . "<br>";
            ?>

        </div>
    </div>


</body>
</html>