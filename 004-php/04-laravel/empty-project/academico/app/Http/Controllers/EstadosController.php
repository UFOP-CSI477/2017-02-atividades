<?php 

namespace App\Http\Controllers;

use App\Estado;

class EstadosController extends Controller {

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $estados = Estado::all();

        //Invocar a view passando os dados
        return view ('estados.listar') -> with ('estados', $estados);

        //ou
        return view ('estados.listar', compact ('estados'));
    }
}