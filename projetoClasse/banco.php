<?php

require_once 'src/Contas.php';


$primeiraConta = new Conta("123.456.789-10",'Vinicius Dias');
$primeiraConta->deposita(500);
$primeiraConta->saca(300);
echo 'NOme: ' . $primeiraConta->recuperarNomeTitular() .PHP_EOL;
echo 'CPF: ' . $primeiraConta->recuperarCpfTitular() .PHP_EOL;
echo 'Saldo: ' . $primeiraConta->recuperarSaldo() .PHP_EOL;

$segundaConta = new Conta('698.549.548-10','Pat');
var_dump($segundaConta);