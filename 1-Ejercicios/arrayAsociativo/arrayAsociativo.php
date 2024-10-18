<?php 

/*Rellena un array de 100 elementos de manera aleatoria con valores M o F (por ejemplo [“M”, “M”, “F”,
“M”, ...]). Una vez completado, vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los
valores almacenando el resultado en un array asociativo [‘M’ => 44, ‘F’ => 66] (no utilices variables
para contar las M o las F). Finalmente, muestra el resultado por pantalla

*/



    $contadorMax = 100;
    $contador = 0;
    $listadoSexo = [];



    while ($contador <= $contadorMax){
        $numRandom = rand(1, 2);
        switch ($numRandom){
            case 1:
                array_push($listadoSexo, "M");
                break;
            case 2:
                array_push($listadoSexo, "F");
                break;
        }

        $contador++;


    /*
        match ($numRandom) {
            1 => array_push($listadoSexo, "M"),
            2 => array_push($listadoSexo, "F"),
        };
    */


    }

    print_r($listadoSexo);

?>