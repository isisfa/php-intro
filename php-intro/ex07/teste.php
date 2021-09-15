<?php

function verificaPalindromo(String $palavra) {
    $palavra = strtoupper($palavra);
    $palavraComoArray = str_split($palavra);
    $palavraComoArrayInvertida = array_reverse($palavraComoArray);
        if(!($palavraComoArray == $palavraComoArrayInvertida)) {
            echo "A palavra " . $palavra . " não é um políndromo";
        }
        echo "A palavra " . $palavra . " é um políndromo";
}

verificaPalindromo('radar');