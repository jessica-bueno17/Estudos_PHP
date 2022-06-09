<?php

function pesquisaClientePorCpf($cpf, $clientes) {
    return key_exists($cpf, $clientes) ? $clientes[$cpf]['nome'] : null;
}

function exibeClienteNoTerminal($cpf, $clientes) {
    $clienteEncontrado = pesquisaClientePorCpf($cpf, $clientes);

    if ($clienteEncontrado === null) {
        echo " -> CLIENTE NÃO CADASTRADO" . PHP_EOL;
    } else {
        echo " -> CLIENTE $clienteEncontrado ENCONTRADO" . PHP_EOL;
    }
}

function exibeClienteNoHtml($cpf, $clientes) {
    $clienteEncontrado = pesquisaClientePorCpf($cpf, $clientes);

    if ($clienteEncontrado === null) {
        echo "<h1>CLIENTE NÃO CADASTRADO</h1>" . PHP_EOL;
    } else {
        echo "<h2>CLIENTE <i>$clienteEncontrado</i> ENCONTRADO</h2>" . PHP_EOL;
    }
}

// DEFINIR TRÊS CLIENTES, COM CPF, NOME E CATEGORIA
$clientes = [
    "111.111.111-11" => [
        "nome" => "ana",
        "categoria" => "GOLD",
        "renda" => 10000
    ],
    "222.222.222-22" => [
        "nome" => "bia",
        "categoria" => "SILVER",
        "renda" => 5000
    ],
    "333.333.333-33" => [
        "nome" => "caio",
        "categoria" => "BRONZE",
        "renda" => 7500
    ],
    "444.444.444-44" => [
        "nome" => "ana beatriz",
        "categoria" => "PLATINUM",
        "renda" => 5100
    ],
    "555.555.555-55" => [
        "nome" => "bia maria",
        "categoria" => "GOLD",
        "renda" => 6800
    ],
    "666.666.666-66" => [
        "nome" => "caio césar",
        "categoria" => "SILVER",
        "renda" => 8200
    ]
];

echo '========== Dados de clientes de determinada categoria: ========' . PHP_EOL;

function pesquisaClientesPorCategoria(string $pesquisaCategoria, array $clientes)
{
    $categoriaClientes = []; 

    foreach($clientes as $cliente){
        if ($pesquisaCategoria == $cliente['categoria']){
            $categoriaClientes[] = $cliente;
        } 
    }
  return $categoriaClientes;
}

$clientesSilver = pesquisaClientesPorCategoria('SILVER', $clientes);

foreach($clientesSilver as $nome){
    echo $nome['categoria'] . ": ". $nome['nome'] . PHP_EOL;
}

function exibeMediaSalarial(array $clientesPorCategoria)
{
    $totalRenda = 0;
    foreach($clientesPorCategoria as $rendaCliente){
        $totalRenda += $rendaCliente['renda'];
    }
    $rendaMedia = $totalRenda/count($clientesPorCategoria);
    echo "Média Salarial da Categoria: " . $rendaMedia . PHP_EOL;
}

exibeMediaSalarial($clientesSilver);

function pesquisaClientesPorNome (string $nome, array $clientes)
{   
    $listaNomes = [];

    foreach($clientes as $cliente){
        if(preg_match("/\b$nome\b/i",$cliente['nome'])){
         $listaNomes[] = $cliente['nome'];
        }
    } 
    return  $listaNomes;
}

$clientesAna = pesquisaClientesPorNome('ana', $clientes);

function exibeClientes(array $nomePesquisado)
{
    echo " ========== Clientes pesquisados por nome determinado: ========" . PHP_EOL;
    foreach($nomePesquisado as $nome){
        echo $nome . PHP_EOL;
    }
}

exibeClientes($clientesAna);
