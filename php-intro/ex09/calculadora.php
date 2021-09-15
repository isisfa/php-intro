<?php

function calculadora ($num1, $num2) {
    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $multiplicacao = $num1 * $num2;
    $divisao = $num1 / $num2;

    echo "Soma: " . $soma . "<br>";
    echo "Subtração: " . $subtracao . "<br>";
    echo "Multiplicação: " . $multiplicacao . "<br>";
    echo "Divisão: " . $divisao . "<br>";
}

calculadora(20, 2);