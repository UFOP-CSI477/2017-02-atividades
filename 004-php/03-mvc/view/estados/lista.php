<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de estados</title>
  </head>
  <body>

    <table>
      <tr>
        <th>Código</th>
        <th>Nome</th>
      </tr>

      <!-- Dados dos alunos //-->
      <?php foreach ($lista as $estado): ?> 
        <tr>
          <td><?php echo utf8_encode($estado['id']) ?></td> 
          <td><?php echo utf8_encode($estado['nome']) ?></td>
        </tr>
      <?php endforeach ?>

    </table>

  </body>
</html>
