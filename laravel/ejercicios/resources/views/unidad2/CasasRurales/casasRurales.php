<?php
    
    $rutaFichero = "casas_rurales.csv";
    $aperturaFichero = fopen($rutaFichero, "r");
    $datosAsociativos = [];


    if (file_exists($rutaFichero)){
        if (!$aperturaFichero){
            "No se ha podido leer el archivo";
        }else{
            while (!feof($aperturaFichero)){
                $linea = fgets($aperturaFichero);
                $informacion[] = explode(";", $linea);
            }


            $cabecera = array_shift($informacion);


            foreach ($informacion as $linea) {
                $datosAsociativos[] = array_combine($cabecera, $linea);
            }

        }

    }else{
        echo "Archivo no enontrado. Compruebe la ruta.";
    }
?>


<?php
    
?>