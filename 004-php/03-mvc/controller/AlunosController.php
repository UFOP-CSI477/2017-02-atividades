<?php

namespace Controller;
use Model\Aluno;

class AlunosController {

	public function listar(){

		//Acesso aos dados
		$aluno = new Aluno();


		//Manipular os dados ->modelo
		//- Recuperação
		$lista = $aluno->getAlunos();

		//Manipulação/tratamento
		//...


		//Invocar/retornar os dados para a view
		//return view('Listar.blade.php')<- laravel

		include './view/alunos/lista.php';
	}

}
