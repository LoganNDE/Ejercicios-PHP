<?php
    
    $fileTemplate = "plantillas.csv";
    $streamFile = fopen($fileTemplate, "r");


    if (file_exists($fileTemplate)){

        while(!feof($streamFile)){
            $player = fgets($streamFile);
            $players[] = explode(",", $player);
        }
        fclose($streamFile);
        $header = array_shift($players);

        foreach ($header as $title){
            trim($title);
        }

        foreach ($players as $player){
            $listPlayers[] = array_combine($header, $player);
        }        

    }else{
        echo "El fichero indicado no existe. Por favor, vuelva a intentarlo";
    }


?>