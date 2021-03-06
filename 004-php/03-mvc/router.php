<?php

// Includes - framework
include './model/Database.php';
include './model/Aluno.php';
include './model/Cidade.php';
include './model/Estado.php';
include './controller/AlunosController.php';
include './controller/CidadesController.php';
include './controller/EstadosController.php';

// Tratamento das rotas
use Controller\AlunosController;
use Controller\CidadesController;
use Controller\EstadosController;

$op = $_GET['op'];

// Definição das rotas
if ($op == 1){
	$alunoController = new AlunosController;
	$alunoController-> listar();
}

elseif($op == 2){
	$cidadeController = new CidadesController;
	$cidadeController-> listar();
}

elseif ($op == 3){
	$estadoController = new EstadosController;
	$estadoController-> listar();
}