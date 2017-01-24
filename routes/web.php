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

Route::get('/empresas', 'EmpresasController@show');

Route::get('/alunos', 'AlunosController@show');

Route::get('/relatorios', 'RelatoriosController@show');

Route::get('/vagas', 'VagasController@show');

Route::get('/cursos', 'CursosController@show');

Route::get('/professores', 'CursosController@showProfessores');

Route::post('/professores/criar', 'CursosController@runCreateProfessor');

Route::get('/usuarios/criar', 'UsuariosController@create');

Route::post('/usuarios/criar', 'UsuariosController@runCreate');


