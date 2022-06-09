<?php

function sacar ($conta,$valorASacar)
{
    if($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar, " .$conta['titular'] . ".");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar($conta, $valorADepositar) {
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }

    return $conta;
}


function exibeMensagem($mensagem) 
{
    echo $mensagem . PHP_EOL;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
    echo $conta['titular'] . PHP_EOL;
}