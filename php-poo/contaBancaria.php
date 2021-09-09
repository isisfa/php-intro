<?php

class contaBancaria
{
//public - private - protected
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo()
    {
        echo 'Seu saldo atual é: R$ ' . $this-> saldo . '<br>';
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        echo 'Deposito de R$ ' . $valor . ' realizado! <br>';
    }

    public function levantar($valor)
    {
        $this->saldo -= $valor;
        echo 'Levantamento de R$ ' . $valor . ' realizado! <br>';
    }
}

$conta = new contaBancaria(
    'Banco do Brasil',  // banco
    'Isis Figueiredo',  // nomeTitular
    '0001',             // numeroAgencia
    '100100-1',         // numeroConta
    0             // saldo
);


echo $conta->obterSaldo(); // 0

$conta->depositar(300.00);

echo $conta->obterSaldo(); // 300

$conta-> levantar(100);

echo $conta->obterSaldo(); // 300