<?php
require_once '../../modelo/Emprestimo.php';
require_once '../../EmprestimoService.php';

use br\com\sicredi\projetoCredEasy\service\EmprestimoService;

$emprestimoService = new EmprestimoService();
$listaDeEmprestimos = $emprestimoService->listaTodosOsEmprestimos();


?>

<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Empréstimos - Listagem</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body>
      <div class="container text-center">
        <h1>Empréstimos Aprovados</h1>
        <?php foreach ($listaDeEmprestimos as $emprestimo) { ?>
          <?php if($emprestimo->getStatusEmprestimo()==="Aprovado") {?>
            
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID EMPRÉSTIMO</th>
                        <th>CPF DO CLIENTE</th>
                        <th>VALOR DO EMPRÉSTIMO</th>
                        <th>TAXA DE JUROS</th>
                        <th>DATA DE SOLICITAÇÃO</th>
                        <th>STATUS</th>
                      
                    </tr>
                </thead>
                
                <tbody>
                  
                    <tr>
                      <td><?php echo $emprestimo->getIdEmprestimo(); ?></td>
                      <td><?php echo $emprestimo->getCpfDoCliente(); ?></td>
                      <td><?php echo $emprestimo->getValorEmprestimo(); ?></td>
                      <td><?php echo $emprestimo->getTaxaDeJuros(); ?></td>
                      <td><?php echo $emprestimo->getDataDeSolicitacao(); ?></td>
                      <td><?php echo $emprestimo->getStatusEmprestimo(); ?></td>
                    </tr>
                </tbody>
            </table>
          <?php } ?>
        <?php } ?>
      </div>

      <div class="container text-center">
        <h1>Empréstimos Quitados</h1>
        <?php foreach ($listaDeEmprestimos as $emprestimo) { ?>
          <?php if($emprestimo->getStatusEmprestimo()==="Quitado") {?>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID EMPRÉSTIMO</th>
                        <th>CPF DO CLIENTE</th>
                        <th>VALOR DO EMPRÉSTIMO</th>
                        <th>TAXA DE JUROS</th>
                        <th>DATA DE SOLICITAÇÃO</th>
                        <th>STATUS</th>
                        <th>DATA DE QUITAÇÃO</th>
                        <th>VALOR FINAL</th>

                      
                    </tr>
                </thead>
                <tbody>
                  
                    <tr>
                      <td><?php echo $emprestimo->getIdEmprestimo(); ?></td>
                      <td><?php echo $emprestimo->getCpfDoCliente(); ?></td>
                      <td><?php echo $emprestimo->getValorEmprestimo(); ?></td>
                      <td><?php echo $emprestimo->getTaxaDeJuros(); ?></td>
                      <td><?php echo $emprestimo->getDataDeSolicitacao(); ?></td>
                      <td><?php echo $emprestimo->getStatusEmprestimo(); ?></td>
                      <td><?php echo $emprestimo->getDataDeQuitacao(); ?></td>
                      <td><?php echo $emprestimo->getValorFinal(); ?></td>
                    </tr>
                </tbody>
            </table>
          <?php } ?>
        <?php } ?>
      </div>

      







  </body>

</html>