<?php
require_once '../../modelo/Cliente.php';
require_once '../../service/ClienteService.php';

use br\com\sicredi\projetoCredEasy\service\ClienteService;

$clienteService = new ClienteService();
$listaDeClientes = $clienteService->listaTodosOsClientes();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes - Listagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h1>Listagem de Clientes</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>CPF</th>
                    <th>NOME</th>
                    <th>RENDA</th>
                    <th>ENDEREÇO</th>
                    <th>PROFISSÃO</th>
                    <th>Nº TELEFONE</th>
                    <th>EMAIL</th>
                    <th>SENHA</th>
                    <th>USUÁRIO</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaDeClientes as $cliente) { ?>
                    <tr>
                        <td><?php echo $cliente->getCpf(); ?></td>
                        <td><?php echo $cliente->getNome(); ?></td>
                        <td><?php echo $cliente->getRenda(); ?></td>
                        <td><?php echo $cliente->getEndereco(); ?></td>
                        <td><?php echo $cliente->getProfissao(); ?></td>
                        <td><?php echo $cliente->getNumeroTelefone(); ?></td>
                        <td><?php echo $cliente->getEmail(); ?></td>
                        <td><?php echo $cliente->getSenha(); ?></td>
                        <td><?php echo $cliente->getTipoDeUsuario(); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>