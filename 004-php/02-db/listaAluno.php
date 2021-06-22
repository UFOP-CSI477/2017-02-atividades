<<<<<<< HEAD
<?php


//Model
$db = new PDO('mysql:host=localhost;dbname=academico','sistemaweb', '123456');


//Controller
$alunos = $db->query("SELECT * FROM alunos order by nome");


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Alunos(as)</title>
</head>
<body>

	<!--Cabeçalho da tabela//-->
	<table>
		<tr>
			<th>Matrícula</th>
			<th>Nome</th>
		</tr>

<?php

	//View
	//Para cada linha...
	while($linha=$alunos->fetch (PDO::FETCH_ASSOC)){ //Inserir uma linha na tabela
		echo utf8_encode("<tr>");
		echo utf8_encode("<td>" . $linha["id"] . "</td>");
		echo utf8_encode("<td>" . $linha["nome"] . "</td>");
		echo "</tr>";
	}

?>
 
 <!--Finalização da tabela//-->

</table>


</body>
=======
<?php


//Model
$db = new PDO('mysql:host=localhost;dbname=academico','sistemaweb', '123456');


//Controller
$alunos = $db->query("SELECT * FROM alunos order by nome");


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Alunos(as)</title>
</head>
<body>

	<!--Cabeçalho da tabela//-->
	<table>
		<tr>
			<th>Matrícula</th>
			<th>Nome</th>
		</tr>

<?php

	//View
	//Para cada linha...
	while($linha=$alunos->fetch (PDO::FETCH_ASSOC)){ //Inserir uma linha na tabela
		echo utf8_encode("<tr>");
		echo utf8_encode("<td>" . $linha["id"] . "</td>");
		echo utf8_encode("<td>" . $linha["nome"] . "</td>");
		echo "</tr>";
	}

?>
 
 <!--Finalização da tabela//-->

</table>


</body>
>>>>>>> 680a7bd8e24cbc4a96aab61d8a624f33bf8bad77
</html>