<?php

require_once "Quadrado.php";
require_once "Circulo.php";

$figuras = [
    new Quadrado("verde", 2),
    new Circulo("azul", 2)
];

foreach($figuras as $f){
    echo $f->show(). "</br>";
}

var_dump($figuras);