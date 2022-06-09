<?php

// include 'funcoesBanco.php';

// require 'funcoesBanco.php';

require_once 'funcoesBanco.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-11'] = depositar($contasCorrentes['123.456.789-11'], 25);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

/*foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']
    );
}*/

// uma forma diferente de escrever a string -- obs array associativo
/*foreach ($contasCorrentes as $cpf => $conta) {
   exibeMensagem(
       "$cpf $conta[titular] $conta[saldo]"
   );
}*/

// função list
foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem(
        "$cpf $titular  $saldo"
    );
}


// foreach ($contasCorrentes as $cpf => $conta) {
//     ['titular' => $titular, 'saldo' => $saldo] = $conta;
//     exibeMensagem(
//         "$cpf $titular  $saldo"
//     );
// }

//echo 'teste' . PHP_EOL;
//echo $contasCorrentes['123.456.789-10']['titular'] .PHP_EOL;
//print_r($contasCorrentes['123.456.789-10']);

