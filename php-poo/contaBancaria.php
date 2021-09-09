<?php
declare(strict_types=1);

class contaBancaria
{
//public - private - protected
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct
    (string $banco, 
    string $nomeTitular, 
    string $numeroAgencia, 
    string $numeroConta, 
    float $saldo
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo(): string
    {
        return 'Seu saldo atual é: R$ ' . $this-> saldo . '<br>';
    }

    public function depositar(float $valor): string
    {
        $this->saldo += $valor;
        return 'Deposito de R$ ' . $valor . ' realizado! <br>';
    }

    public function levantar(float $valor): string
    {
        $this->saldo -= $valor;
        return 'Levantamento de R$ ' . $valor . ' realizado! <br>';
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

echo $conta->depositar(300.00);

echo $conta->obterSaldo(); // 300

echo $conta-> levantar(100);

echo $conta->obterSaldo(); // 300