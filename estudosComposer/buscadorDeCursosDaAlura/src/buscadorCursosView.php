<?php
require_once '../buscar-cursos.php';

$i=1;

?>

<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cursos - Listagem</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body>
      <div class="container text-center">
          <h1>Cursos PHP da Alura</h1>
          <table class="table table-striped ">
              <thead>
                  <tr>
                    <th>NÚMERO</th>
                    <th>NOME DO CURSO</th>
                  
                  </tr>
              </thead>

              <tbody>
              <?php foreach ($cursos as $curso) { ?>
                  <tr>
                  <td><?php echo $i++ ; ?></td>
                    <td><?php echo $curso; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
          </table>
      </div>
  </body>

</html>