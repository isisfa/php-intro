<?php

    $array = ["Um", "Dois", "Três"];
    for ($i = 0; $i <= 2; $i++) {
        echo $array[$i] . "<br>";
    }

    $array2 = [
        "Key_1" => "a2 - Um", 
        "outra_key" => "a2 - Dois", 
        "Key_3" => "a2 - Três"
    ];

    foreach($array2 as &$value){
        echo $value . "<br>";
        $value = "teste";
    }
    unset($value);
    
    foreach($array2 as $key => $value){
        echo $key . " -> " .$value . "<br>";
    }

?>