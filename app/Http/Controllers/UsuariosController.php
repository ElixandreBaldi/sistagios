<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class UsuariosController extends Controller
{
    public function create()
    {
        return view('usuarios_criar');
    }

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
