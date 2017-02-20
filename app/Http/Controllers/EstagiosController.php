<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estagio;
use App\Aluno;
use App\Empresa;
use App\Curso;

class EstagiosController extends Controller
{
    public function show()
    {
        $estagios = Estagio::all();
        return view('estagios', compact('estagios'));
    }

    public function showOne(Estagio $estagio)
    {
        $empresas = Empresa::get(['id', 'nome']);
        $cursos = Curso::get(['id', 'nome']);
        $alunos = Aluno::get(['id', 'nome']);
        return view('estagios_mostrar', compact('estagio', 'empresas', 'cursos', 'alunos'));
    }

    public function create()
    {
        $empresas = Empresa::all();
        $cursos = Curso::all();
    	return view('estagios_criar', compact('empresas', 'cursos'));
    }

    public function runCreate(Request $request)
    {
        Estagio::create([
            'descricao' => $request->descricao,
            'setor' => $request->setor,
            'bolsa' => $request->bolsa,
            'aberta' => 1,
            'supervisor' => $request->supervisor,
            'idCurso' => $request->curso,
            'idEmpresa' => $request->empresa
    	]);
      return redirect('/estagios');
    }

    public function runEdit(Request $request, Estagio $estagio)
    {
        $estagio->update([
            'descricao' => $request->descricao,
            'setor' => $request->setor,
            'bolsa' => $request->bolsa,
            'supervisor' => $request->supervisor,
            'idCurso' => $request->curso,
            'idEmpresa' => $request->empresa
    	]);
      return redirect('/estagios');
    }

    public function runDelete(Request $request, Estagio $estagio)
    {
        $deleted = $estagio->delete();
        return compact('deleted');
    }

    public function runAddAluno(Request $request, Estagio $estagio)
    {
        $estagio->update([
            'idAluno' => $request->aluno,
            'data_inicio' => $request->data_inicio,
            'data_fim' => $request->data_fim,
            'aberta' => 0
        ]);
      return redirect('/estagios/' . $estagio->id);
    }
}
