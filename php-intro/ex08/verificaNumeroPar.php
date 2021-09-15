<?php

function verificaNumeroPar($num) {
    if ($num % 2 == 0){
        echo "par";
    } else {
        echo "ímpar";
    }
}

verificaNumeroPar(10);