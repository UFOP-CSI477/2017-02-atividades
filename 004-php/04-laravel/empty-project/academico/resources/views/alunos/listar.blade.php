@extends ('layout.principal')

@section ('conteudo')

<h1>Lista de alunos(as)</h1>

    <table>

      <!--Cabeçalho-->
      <tr>  
        <th>Código</th>
        <th>Nome</th>
      </tr>

      <!-- Dados dos alunos //-->
      @foreach($alunos as $aluno)

      <tr>
        <td>{{ $aluno->id }}</td>
        <td>{{ $aluno->nome }}</td>
      </tr>

      @endforeach

    </table>

    @endsection
