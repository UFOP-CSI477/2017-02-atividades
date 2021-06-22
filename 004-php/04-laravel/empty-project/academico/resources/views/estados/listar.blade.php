@extends ('layout.principal')

@section ('conteudo')

<h1>Lista de Estados</h1>

    <table>

      <!--Cabeçalho-->
      <tr>  
        <th>Código</th>
        <th>Nome</th>
      </tr>

      <!-- Dados dos alunos //-->
      @foreach($estados as $estado)

      <tr>
        <td>{{ $estado->id }}</td>
        <td>{{ $estado->nome }}</td>
      </tr>

      @endforeach

    </table>

    @endsection
