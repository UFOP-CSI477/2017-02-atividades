<?php

namespace Controller;
use Model\Cidade;

class CidadesController {

	public function listar(){

		//Acesso aos dados
		$cidade = new Cidade();


		//Manipular os dados ->modelo
		//- Recuperação
		$lista = $cidade->getCidades();

		//Manipulação/tratamento
		//...


		//Invocar/retornar os dados para a view
		//return view('Listar.blade.php')<- laravel

		include './view/cidades/lista.php';
	}

}