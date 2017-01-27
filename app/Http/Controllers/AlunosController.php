<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aluno;

class AlunosController extends Controller
{
    public function show()
    {
        return view('alunos');
    }

    public function showOne(Aluno $aluno)
    {
        return view('alunos_mostrar');
    }

    public function create()
    {
    	return view('alunos_criar');
    }

    public function runCreate(Request $request)
    {
    	Aluno::insert([
    		// data
    	]);
      return redirect('/alunos');
    }

    public function runEdit(Request $request, Aluno $aluno)
    {
    	$aluno->update([
    		// data
    	]);
      return redirect('/alunos/' + $aluno->id);
    }

    public function runDelete(Request $request, Aluno $aluno)
    {
    	$aluno->delete();
      return redirect('/alunos');
    }
}
