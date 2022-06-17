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
    <title>Cinema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h1>Listagem de Clientes</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ingresso</th>
                    <th>Nome</th>
                    <th>RENDA</th>
            
                </tr>
            </thead>
            <tbody>
                  <tr>
                    <td><?php echo $cliente->getCpf(); ?></td>
                  </tr>
            </tbody>
        </table>
    </div>
</body>

</html>