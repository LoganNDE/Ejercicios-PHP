<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum | Logan Naranjo Rodriguez</title>
</head>

<style>

    *{
        box-sizing: border-box;
        padding: 0px;
        margin: 0 10px;
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
        height: 40vh;
        width: 30%;
        display: flex;
        flex-direction: column;
        align-items: center;
        }

    .estudios{
        font-size: 13px;

    }

    hr{
        margin-top: 5px;
        width: 16em;
        height: 2px;
        background-color: black;
    }

    .secciones{
        margin-top: 30px;
        align-self: flex-start;
    }

    .informacion{
        font-size: 13px;
        margin-top: 5px;
    }





</style>


<body>


    <?php

    $nombre = "Logan";
    $apellidos = "Naranjo Rodriguez";
    $titulos = ["Técnico en sistemas microinformáticos y redes", "otro"];
    $anyoNacimiento = 2004;
    $descripcion = "Lorem ipsum dolor sit, soluta debitis? Id dicta dolore tempore sint, consequatur assumenda ut modi alias ab ex dignissimos temporibus ducimus nulla aliquam molestiae unde distinctio quis. Repudiandae cumque sit voluptates ipsum earum libero impedit porro error. Facere minus accusamus dolorem sed, quaerat veritatis ex rerum? Rem maiores temporibus impedit accusamus.";
    $estudios = ["E.S.O | Edudación Secundaria Obligatoria", "Grado Medio | Sistemas microinformáticos y redes", "Grado Superior | Desarrolo de aplicaciones web"]
    ?>

    <div class="main">
        <div class="container">
        <h1><?php print ($nombre . " " . $apellidos)?></h1>
        <h2 class="estudios"><?php print ($titulos[0])?></h2>
        <hr>
        <p class="secciones">Sobre mí</p> 
        <p class="informacion"><?php echo $descripcion ?></p>
        <p class="secciones">Estudios</p>
        <ul>
            <?php
            
            foreach ($estudios as $i){
                print ("<li class= 'informacion'>" . $i . "</li>" );
            };
            
            ?>
        </ul> 
        </div>



    </div>

</body>
</html>