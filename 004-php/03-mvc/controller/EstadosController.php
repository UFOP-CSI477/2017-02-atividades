<?php

namespace Controller;
use Model\Estado;

class EstadosController {

	public function listar(){

		//Acesso aos dados
		$estado = new Estado();


		//Manipular os dados ->modelo
		//- Recuperação
		$lista = $estado->getEstados();

		//Manipulação/tratamento
		//...


		//Invocar/retornar os dados para a view
		//return view('Listar.blade.php')<- laravel

		include './view/estados/lista.php';
	}

}