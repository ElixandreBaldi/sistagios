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
        $this->validate($request, [
            'nome' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'cep' => 'required|regex:/^[0-9]{5}\-[0-9]{3}$/',
            'bairro' => 'required|max:255',
            'rua' => 'required|max:255',
            'numero' => 'required|numeric',
            'cidade' => 'required|max:255',
            'estado' => 'required|regex:/^[A-Z]{2}$/',
            'telefone' => 'required',
            'email' => 'required|email',            
            'cpf' => 'required|cpfcnpj',
            'rg' => 'required|regex:/^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\-[0-9]{1}$/'
        ]);

        $endereco = Endereco::insertGetId([
            'CEP' => $request->cep,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf' => $request->estado
        ]);
    	Aluno::create([
            'nome' => $request->nome,
            'telefone' => $request->fone,
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
        $this->validate($request, [
            'nome' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'cep' => 'required|regex:/^[0-9]{5}\-[0-9]{3}$/',
            'bairro' => 'required|max:255',
            'rua' => 'required|max:255',
            'numero' => 'required|numeric',
            'cidade' => 'required|max:255',
            'estado' => 'required|regex:/^[A-Z]{2}$/',
            'telefone' => 'required',
            'email' => 'required|email',            
            'cpf' => 'required|cpfcnpj',
            'rg' => 'required|regex:/^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\-[0-9]{1}$/'
        ]);
        
        $aluno->endereco()->update([
            'CEP' => $request->cep,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf' => $request->estado
        ]);
    	$aluno->update([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'rg' => $request->rg,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'idCurso' => $request->curso
    	]);
      return redirect('/alunos');
    }

    public function runDelete(Request $request, Aluno $aluno)
    {
        $end = $aluno->idEndereco;
        $deleted = $aluno->delete();
        Endereco::where('id', $end)->delete();
        return compact('deleted');
    }
}
