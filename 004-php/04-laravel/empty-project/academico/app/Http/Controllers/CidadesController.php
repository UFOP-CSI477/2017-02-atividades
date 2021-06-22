<?php 

namespace App\Http\Controllers;

use App\Cidade;

class CidadesController extends Controller {

	public function listar() {

		//Acesso ao modelo e recuperação dos dados
		$cidades = Cidade::all();

		//Invocar a view passando os dados
		return view ('cidades.listar') -> with ('cidades', $cidades);

		//ou
		return view ('cidades.listar', compact ('cidades'));
	}
}