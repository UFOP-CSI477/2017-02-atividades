<?php 

namespace App\Http\Controllers;

use App\Aluno;

class AlunosController extends Controller {

	public function listar() {

		//Acesso ao modelo e recuperação dos dados
		$alunos = Aluno::all();

		//Invocar a view passando os dados
		return view ('alunos.listar') -> with ('alunos', $alunos);

		//ou
		return view ('alunos.listar', compact ('alunos'));
	}
}