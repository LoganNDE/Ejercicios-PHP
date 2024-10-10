<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombrePartido'], $_POST['votosPartido'], $_POST['escanos'])) {
    $nombrePartido = $_POST['nombrePartido'];
    $numVotos = $_POST['votosPartido'];
    $numeroEscanyos = intval($_POST['escanos']);


    $combinacionPartidos = array_combine($nombrePartido, $numVotos);

    print_r($combinacionPartidos);

    echo "<br>";

    if (is_int($numeroEscanyos)){
        $totalEscanyos = [];
        foreach ($combinacionPartidos as $key => $votos){
            echo "<br>" . $key . " " ;
            for ($contador = 1; $numeroEscanyos >= $contador; $contador++){
                $escanyo = round($votos / $contador);
                array_push($totalEscanyos, $escanyo);
                echo $escanyo . ", ";
                //echo "Escanyo " . $contador;
            }
        
        }

        echo "<br>";
        arsort($totalEscanyos);

        $listaNumeroMayores = array_splice($totalEscanyos,0 ,7);

        print_r($listaNumeroMayores);

        /*foreach ($combinacionPartidos as $key => $votos){
            if ()
        }
        */

            
    }
    



    }else{
        echo "Debes rellenar el formulario";
    }  

?>