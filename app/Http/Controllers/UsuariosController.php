<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

/**
* Controlador central das funções de Usuário (criação)
* @author Elixandre Baldi, Luiz Rosa, Victor Pozzan
* @version 1.0
*/
class UsuariosController extends Controller
{

    /**
    * Função que mostra o formulário de criação de usuários na view.
    * @return Illuminate\Http\Response
    */
    public function create()
    {
        return view('usuarios_criar');
    }

    /**
    * Função que executa a criação de um usuário.
    * @param Illuminate\Support\Facades\Request
    * @return Illuminate\Http\RedirectResponse
    */
    public function runCreate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);
		User::insert([
			'name' => $request->name,
			'username' => $request->username,
			'password' => bcrypt($request->password)
		]);
        return redirect('/menu');
    }
}
