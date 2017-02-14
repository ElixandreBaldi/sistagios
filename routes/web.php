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

Route::group(['middleware' => ['auth']], function ()
    {
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
        Route::get('/alunos/{aluno}', 'AlunosController@showOne');
        Route::post('/alunos/{aluno}/editar', 'AlunosController@runEdit');
        Route::post('/alunos/{aluno}/excluir', 'AlunosController@runDelete');

        /**
        * Relatórios
        */

        Route::get('/relatorios', 'RelatoriosController@show');

        /**
        * Estágios
        */

        Route::get('/estagios', 'EstagiosController@show');
        Route::get('/estagios/criar', 'EstagiosController@create');
        Route::post('/estagios/criar', 'EstagiosController@runCreate');
        Route::get('/estagios/{estagio}', 'EstagiosController@showOne');
        Route::post('/estagios/{estagio}/editar', 'EstagiosController@runEdit');
        Route::post('/estagios/{estagio}/excluir', 'EstagiosController@runDelete');

        /**
        * Cursos
        */

        Route::get('/cursos', 'CursosController@show');
        Route::get('/cursos/criar', 'CursosController@createCurso');
        Route::post('/cursos/criar', 'CursosController@runCreateCurso');
        Route::get('/cursos/{curso}', 'CursosController@showOneCurso');
        Route::post('/cursos/{curso}/editar', 'CursosController@runEditCurso');
        Route::post('/cursos/{curso}/excluir', 'CursosController@runDeleteCurso');

        /**
        * Cursos -> Professores
        */

        Route::get('/professores', 'CursosController@showProfessores');
        Route::get('/professores/{professor}', 'CursosController@showOneProfessor');
        Route::post('/professores/criar', 'CursosController@runCreateProfessor');
        Route::post('/professores/{professor}/editar', 'CursosController@runEditProfessor');
        Route::post('/professores/{professor}/excluir', 'CursosController@runDeleteProfessor');

        /**
        * Usuários
        */

        Route::get('/usuarios/criar', 'UsuariosController@create');
        Route::post('/usuarios/criar', 'UsuariosController@runCreate');
    }
);
