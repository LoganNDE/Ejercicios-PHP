<?php
    header("Refresh:5; url=index.html");    

    $nameFile = $_FILES['formFile']['name'];
    $destinationPath = __DIR__ . "/imagenes";


    $regex = "/.*.(svg|png|jpg|jepg)/";
    

    if (!isset($_POST["formFile"])){
        echo "Solicitud recibida";
        if (preg_match($regex, $nameFile)){

            if (is_uploaded_file($_FILES['formFile']['tmp_name'])) {
                // subido con éxito
                echo $destinationPath;
                $nombre = $_FILES['formFile']['name'];
                move_uploaded_file($_FILES['formFile']['tmp_name'], "$destinationPath/{$nombre}");
                echo "<p>Archivo $nombre subido con éxito</p>";
                echo "Redireccionando al inicio en 5 segundos.";
                }
        }else{
            echo "<br>Archivo invalido. Recuerde, los formatod admitidos son [SVG, PNG, JPG, JPEG] <br>";
            echo "Redireccionando al inicio en 5 segundos.";
        }
    }else{
        echo "Solicitid no recibida. Vuelva subir su archivo. <br>";
        echo "Redireccionando al inicio en 5 segundos.";
    }

?>