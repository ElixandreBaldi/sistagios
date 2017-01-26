<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/sair', 'HomeController@logout');
Route::get('/menu', 'HomeController@menu');

/**
* Empresas
*/

Route::get('/empresas', 'EmpresasController@show');
Route::get('/empresas/{id}', 'EmpresasController@showOne');
Route::post('/empresas/{id}/editar', 'EmpresasController@runEdit');
Route::post('/empresas/{id}/excluir', 'EmpresasController@runDelete');
Route::get('/empresas/criar', 'EmpresasController@create');
Route::post('/empresas/criar', 'EmpresasController@runCreate');

/**
* Alunos
*/

Route::get('/alunos', 'AlunosController@show');

/**
* Relatórios
*/

Route::get('/relatorios', 'RelatoriosController@show');

/**
* Vagas
*/

Route::get('/vagas', 'VagasController@show');

/**
* Cursos
*/

Route::get('/cursos', 'CursosController@show');

/**
* Cursos -> Professores
*/

Route::get('/professores', 'CursosController@showProfessores');
Route::post('/professores/criar', 'CursosController@runCreateProfessor');
//Route::post('', 'CursosController@editarProfessores');
Route::get('professores/editar/{id}', 'CursosController@editarProfessores');

/**
* usuários
*/

Route::get('/usuarios/criar', 'UsuariosController@create');
Route::post('/usuarios/criar', 'UsuariosController@runCreate');

