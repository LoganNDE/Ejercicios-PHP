<?php

    $palabraOriginal = "Osciloscopio";
    $palabraCaracterImpares = "";

    for ($i = 0; $i < strlen($palabraOriginal) ; $i++) {
        
        if ($i % 2 != 0) {
            $palabraCaracterImpares .= chunk_split($palabraOriginal[$i]);
        }
    }