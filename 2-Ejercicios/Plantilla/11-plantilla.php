<?php

$fichero = "plantillas.csv";
$lecturaFichero = fopen($fichero, "r");

if (file_exists($fichero)){
    
    if (!$lecturaFichero){
        print "No se ha podido abrir el archivo";
    }else{
        while(!feof($lecturaFichero)){
            $linea = fgets($lecturaFichero);
            $vector[] = explode(",", $linea);
            
        }
        fclose($lecturaFichero);
        $cabecera = array_shift($vector);


        foreach ($cabecera as $elemento ) {
            $cabecera1[] = trim($elemento);
        }

        foreach ($vector as $jugador) {
            $arrayAsociativo[] = array_combine($cabecera1, $jugador);    
        }

    }

}else{
    print "El fichero indicado no es correcto. Vuelva a intentarlo";
}


?>