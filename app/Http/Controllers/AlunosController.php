<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aluno;
use App\Curso;
use App\Endereco;

class AlunosController extends Controller
{
    public function show()
    {
        $alunos = Aluno::all();
        foreach($alunos as $aluno) {
            $aluno->curso = $aluno->curso()->value('nome');
            $aluno->endereco = $aluno->endereco()->first();
        }
        return view('alunos', compact('alunos'));
    }

    public function showOne(Aluno $aluno)
    {
        $cursos = Curso::all();
        $aluno->endereco = $aluno->endereco()->first();
        return view('alunos_mostrar', compact('cursos', 'aluno'));
    }

    public function create()
    {
        $cursos = Curso::all();
    	return view('alunos_criar', compact('cursos'));
    }

    public function runCreate(Request $request)
    {
        $endereco = Endereco::insertGetId([
            'CEP' => $request->CEP,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf' => $request->uf
        ]);
    	Aluno::insert([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'rg' => $request->rg,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'idCurso' => $request->curso,
            'idEndereco' => $endereco
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
