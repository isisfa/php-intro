<?php

require_once "Funcionario.php";

class Telefonista extends Funcionario{

    private const VALOR_POR_VENDA = 20;
    private int $n_vendas_feitas;

    public function __construct(string $nome, int $num_funcionario, int $n_vendas_feitas)
    {
        parent::__construct($nome, $num_funcionario);
        $this->n_vendas_feitas = $n_vendas_feitas;
    }

    public function getSalario(): float{
        return parent::VALOR_BASE + (self::VALOR_POR_VENDA * $this->n_vendas_feitas);
    }
}