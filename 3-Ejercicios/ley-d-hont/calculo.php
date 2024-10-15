<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombrePartido'], $_POST['votosPartido'], $_POST['escanos'])) {
    $nombrePartido = $_POST['nombrePartido'];
    $numVotos = $_POST['votosPartido'];
    $numeroEscanyos = intval($_POST['escanos']);


    $combinacionPartidos = array_combine($nombrePartido, $numVotos);

        if (is_int($numeroEscanyos)){
            $totalEscanyos = [];
            foreach ($combinacionPartidos as $key => $votos){
                $escaniosPartido = [];
                for ($contador = 1; $numeroEscanyos >= $contador; $contador++){
                    $escanyo = round($votos / $contador);
                    array_push($escaniosPartido, $escanyo);
                    $totalEscanyos[$key] = $escaniosPartido;
                }
            }
        }

        $copiaTotalEscanyos = [];
        foreach ($totalEscanyos as $key => $escanios){
            foreach ($escanios as $escanyo) {
                array_push($copiaTotalEscanyos, $escanyo); // Agrega cada escaño individualmente
            }
        }

        arsort($copiaTotalEscanyos);
        $listaNumeroMayores = array_splice($copiaTotalEscanyos,0 ,7);


    }else{
        echo "Debes rellenar el formulario";
    }  

?>