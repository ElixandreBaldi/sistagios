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

    public function showOneProfessor(Professor $professor){
        return view('mostrar_professor',compact('professor'));
    }

    public function runEditProfessor(Request $request, Professor $professor){
        $professor->update([
            'nome' => $request->nome,
            'email' => $request->email
        ]);
        return redirect('/professores/' . $professor->id);
    }

    public function runDeleteProfessor(Request $request, $professor){
        $deleted = Professor::where('id', $professor)->delete();
        return compact('deleted');    
    }
}
