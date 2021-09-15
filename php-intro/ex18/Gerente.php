<?php

require_once "Funcionario.php";

class Gerente extends Funcionario{


    private const VALOR_DIA = 20;
    private float $n_dias_de_trabalho;

    public function __construct(string $nome, int $num_funcionario, float $n_dias_de_trabalho)
    {
        parent::__construct($nome, $num_funcionario);
        $this->n_dias_de_trabalho = $n_dias_de_trabalho;
    }

    public function getSalario(): float{
        return parent::VALOR_BASE + (self::VALOR_DIA * $this->n_dias_de_trabalho);
    }

    // polimorfismo
    public function Show(){
        return "GERENTE -- Nome: ".$this->getNome()." num: ".$this->getNum(). " salario: ". number_format($this->getSalario(), 2, ","," ") . " EUR";
    }
}