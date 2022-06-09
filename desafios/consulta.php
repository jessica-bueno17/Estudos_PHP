<?php

// DEFINIR TRÊS CLIENTES, COM CPF, NOME E CATEGORIA

$clientes = [
  '345.456.789-10' => [
      'nome' => 'Rafael',
      'categoria' => 'correntista'
  ],
  '987.456.789-11' => [
      'nome' => 'Jéssica',
      'categoria' => 'associado'
  ],
  '999.256.789-12' => [
      'nome' => 'Math',
      'categoria' => 'colaborador'
  ]
];

echo " ===== TODOS OS CLIENTES ===== " . PHP_EOL;

foreach ($clientes as $cpf => $cliente) {
  echo "CPF $cpf: $cliente[nome] $cliente[categoria]" . PHP_EOL;
}




echo PHP_EOL;
echo "===== CLIENTE PESQUISADO =====" . PHP_EOL;

function pesquisaClientePorCpf ($pesquisaCPF,$clientes){
  $verificacao = 0;
  foreach ($clientes as $cpf => $cliente){
    if ($cpf == $pesquisaCPF){
      echo " -> CLIENTE {$cliente['nome']} ENCONTRADO" . PHP_EOL;
      $verificacao = 1;
      break;
    } 
  }

  if($verificacao == 0){
    echo " -> CLIENTE NÃO CADASTRADO" . PHP_EOL; 
  }
}

$nomeDoCliente = pesquisaClientePorCpf('987.456.789-13', $clientes);
