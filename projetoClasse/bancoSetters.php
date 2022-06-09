<?php

require_once 'src/ContaSetters.php';

$primeiraConta = new Conta();
//var_dump($primeiraConta);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

$primeiraConta->definirCpf('123.456.789-10');



echo 'Saldo atual: ' . $primeiraConta->recuperarSaldo() . PHP_EOL;

echo 'CPF: ' . $primeiraConta->recuperarCpfTitular() . PHP_EOL;
