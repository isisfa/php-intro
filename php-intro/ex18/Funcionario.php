<?php

abstract class Funcionario{

    protected const VALOR_BASE = 630;

    private string $nome;
    private int $num_funcionario;

    abstract public function getSalario(): float;

    public function __construct(string $nome, int $num_funcionario)
    {
        $this->nome = $nome;
        $this->num_funcionario = $num_funcionario;
    }

    public function Show(){
        return "Nome: ".$this->nome." num: ".$this->num_funcionario. " salario: " . number_format($this->getSalario(), 2, ","," ") . " EUR";
    }

    protected function getNome(){
        return $this->nome;
    }

    protected function getNum(){
        return $this->num_funcionario;
    }
}