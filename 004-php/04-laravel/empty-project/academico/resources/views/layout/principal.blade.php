<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema Acadêmico</title>
</head>
	<body>

	<!--LINKS //-->

		<p><a href="{{ url('/') }}">Principal</a></p>
		<p><a href="{{ url('listar/alunos') }}">Alunos</a></p>
		<p><a href="{{ url('listar/cidades') }}"> Cidades</a></p>
		<p><a href="{{ url('listar/estados') }}"> Estados</a></p>
		<p><a href="{{ url('/info') }}">Informações</a></p>


	<!--CONTEUDO //-->

		@yield('conteudo')


	</body>
</html>