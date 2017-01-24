<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsuariosController extends Controller
{
    public function create()
    {
        return view('usuarios_criar');
    }

    public function runCreate(Request $request)
    {
    		User::insert([
    			'name' => $request->name,
    			'username' => $request->username,
    			'password' => bcrypt($request->password)
    		]);
        return redirect('/menu');
    }
}
