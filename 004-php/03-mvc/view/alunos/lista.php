<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de alunos(a)</title>
  </head>
  <body>

    <table>
      <tr>
        <th>Código</th>
        <th>Nome</th>
      </tr>

      <!-- Dados dos alunos //-->
      <?php foreach ($lista as $aluno): ?> 
        <tr>
          <td><?php echo utf8_encode($aluno['id']) ?></td> 
          <td><?php echo utf8_encode($aluno['nome']) ?></td>
        </tr>
      <?php endforeach ?>

    </table>

  </body>
</html>
