<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo){
            echo 'Saldo indisponível' .PHP_EOL;
            return;
        }
        $this->saldo -= $valorASacar;
        
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        } 
        $this->saldo += $valorADepositar;

    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo 'Saldo indisponível.' . PHP_EOL ;
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
        
    }

    public function definirNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;

    }

    public function definirCpf(string $cpf): void
    { 
        $this->cpfTitular = $cpf;

    }

    public function definirSaldoInicial(float $saldoInicial): void
    { 
        $this->saldo = $saldoInicial;

    }


    public function recuperarSaldo(): float 
    {
        return $this->saldo;

    }

    public function recuperarCpfTitular(): string
    {
        return $this->cpfTitular;

    }

    public function recuperarNomeTitular(): string
    {
        return $this->nomeTitular;
        
    }



}

/*echo " ======= UMA CONTA ========" .PHP_EOL;
$umaConta = new Conta();
$umaConta -> saldo = 0;
var_dump($umaConta);}*/

/*echo " ======= SEGUNDA CONTA ========" .PHP_EOL;
$segundaConta = new Conta();
$segundaConta -> saldo = 300;
var_dump($segundaConta);*/


/*echo " ======= DEPOSITAR -- UMA CONTA ========" .PHP_EOL;
$umaConta -> depositar(100);
var_dump($umaConta);*/

/*$contaUm = new Conta();
$contaUm->depositar(500);
echo 'Depósito ' . $contaUm->saldo . PHP_EOL;
$contaDois = new Conta();
$contaUm->transferir(200,$contaDois);
echo "Saldo conta um: " . $contaUm->saldo .  PHP_EOL;
echo "Saldo conta dois: " . $contaDois->saldo .  PHP_EOL;*/



