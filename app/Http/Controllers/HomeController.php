<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Estagio;

/**
* Controlador central de funções genéricas como tela inicial e login.
* @author Elixandre Baldi, Luiz Rosa, Victor Pozzan
* @version 1.0
*/
class HomeController extends Controller
{
    /**
    * Função que mostra o início a aplicação.
    * @return Illuminate\Http\Response
    */
    public function index()
    {
        $vagasAbertas = Estagio::where('aberta', 1)->get();
        foreach($vagasAbertas as $vaga) {
            $vaga->curso = $vaga->curso()->value('nome');
            $vaga->empresa = $vaga->empresa()->value('nome');
        }
        return view('index', compact('vagasAbertas'));
    }

    /**
    * Função que mostra o menu principal da aplicação.
    * @return Illuminate\Http\Response
    */
    public function menu()
    {
        return view('menu');
    }

    /**
    * Função que executa o logout do usuário da aplicação.
    * @return Illuminate\Http\RedirectResponse
    */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
