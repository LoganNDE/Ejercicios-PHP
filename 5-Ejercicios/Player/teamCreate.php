<?php
    include("Objects/Player.php");
    include("Objects/Team.php");
    include("importPlayers.php");



    foreach ($listPlayers as $p){
        if ($p["Equipo"] == "Atlético de Madrid"){
            $Jugadores[] = new Player($p["Nombre"] . " " . $p["Apellidos"], $p["Fecha"], $p["Pais"], $p["Dorsal"], $p["Posicion"], $p["G"], $p["PJ"], $p["M"], $p["TA"], $p["TA"]);
        }
    }

    $Team = new Team("Atlético de Madrid", $Jugadores, 0, 0, 0, 0, 0, 0);