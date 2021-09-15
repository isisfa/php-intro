<?php

require_once "Funcionario.php";

class Secretario extends Funcionario{

    private const VALOR_DIA = 10;
    private float $n_dias_de_trabalho;

    public function __construct(string $nome, int $num_funcionario, float $n_dias_de_trabalho)
    {
        parent::__construct($nome, $num_funcionario);
        $this->n_dias_de_trabalho = $n_dias_de_trabalho;
    }

    public function getSalario(): float{
        return parent::VALOR_BASE + (self::VALOR_DIA * $this->n_dias_de_trabalho);
    }
}