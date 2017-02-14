<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Estagio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
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

    public function menu()
    {
        return view('menu');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
