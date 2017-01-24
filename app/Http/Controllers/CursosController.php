<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Professor;

class CursosController extends Controller
{
    public function show()
    {
    	return view('/cursos');
    }
    
    public function showProfessores()
    {
    	$professores = Professor::all();

		return view('/professores',compact('professores'));
    }

    public function runCreateProfessor(Request $request)
    {
    	Professor::insert([
    			'nome' => $request->nome,
    			'email' => $request->email  		
    		]);
        return redirect('/professores');
    }

    public function editarProfessores($id){
        
    }
}
