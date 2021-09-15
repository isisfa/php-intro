<?php
require_once "Funcionario.php";
require_once "Gerente.php";
require_once "Secretario.php";
require_once "Telefonista.php";

$funcionarios = [
    //new Funcionario("Márcio", 123),
    new Gerente("João", 1589, 12),
    new Gerente("João", 1589, 22),
    new Telefonista("Pedro", 32146, 654),
    new Secretario("Tiago", 46568, 10),
    new Secretario("Tiago", 46568, 21.5)
];

foreach($funcionarios as $f){
    echo $f->show() . "<br>";
}


var_dump($funcionarios);
