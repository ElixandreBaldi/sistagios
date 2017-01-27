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
Route::get('/empresas/criar', 'EmpresasController@create');
Route::post('/empresas/criar', 'EmpresasController@runCreate');
Route::get('/empresas/{id}', 'EmpresasController@showOne');
Route::post('/empresas/{id}/editar', 'EmpresasController@runEdit');
Route::post('/empresas/{id}/excluir', 'EmpresasController@runDelete');

/**
* Alunos
*/

Route::get('/alunos', 'AlunosController@show');
Route::get('/alunos/criar', 'AlunosController@create');
Route::post('/alunos/criar', 'AlunosController@runCreate');
Route::get('/alunos/{id}', 'AlunosController@showOne');
Route::post('/alunos/{id}/editar', 'AlunosController@runEdit');
Route::post('/alunos/{id}/excluir', 'AlunosController@runDelete');

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
Route::get('/cursos/{curso}', 'CursosController@showCurso');
Route::get('/cursos/novo', 'CursosController@createCurso');
Route::post('/cursos/criar', 'CursosController@runCreateCurso');
Route::post('cursos/{curso}/editar', 'CursosController@runEditCurso');
Route::post('curso/{curso}/excluir', 'CursosController@runDeleteCurso');

/**
* Cursos -> Professores
*/

Route::get('/professores', 'CursosController@showProfessores');
Route::get('professores/{professor}', 'CursosController@showOneProfessor');
Route::post('/professores/criar', 'CursosController@runCreateProfessor');
Route::post('professores/{professor}/editar', 'CursosController@runEditProfessor');
Route::post('professores/{professor}/excluir', 'CursosController@runDeleteProfessor');

/**
* usuários
*/

Route::get('/usuarios/criar', 'UsuariosController@create');
Route::post('/usuarios/criar', 'UsuariosController@runCreate');

