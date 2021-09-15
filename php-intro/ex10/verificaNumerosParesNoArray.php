<?php

function verificaNumerosParesNoArray($array){
    $arrayDePares = [];
    for ($i = 0; $i < count($array); $i++){
        if ($array[$i] % 2 == 0){
            array_push($arrayDePares, $array[$i]);
        }
    }
    //var_dump($arrayDePares);
    echo "Contagem de números pares: " . count($arrayDePares);
}
verificaNumerosParesNoArray([10, 20, 11, 2]);