<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('layout.principal');
});

Route::get('listar/alunos', 'AlunosController@listar');

Route::get('listar/cidades', 'CidadesController@listar');

Route::get('listar/estados', 'EstadosController@listar');