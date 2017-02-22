<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estagio;
use App\Aluno;
use App\Empresa;
use App\Curso;

/**
* Controlador central das funções de Estágio
* @author Elixandre Baldi, Luiz Rosa, Victor Pozzan
* @version 1.0
*/
class EstagiosController extends Controller
{

    /**
    * Função que mostra a listagem de estágios na view.
    * @return Illuminate\Http\Response
    */
    public function show()
    {
        $estagios = Estagio::all();
        return view('estagios', compact('estagios'));
    }

    /**
    * Função que mostra um estagio específico na view.
    * @param App\Estagio
    * @return Illuminate\Http\Response
    */
    public function showOne(Estagio $estagio)
    {
        $empresas = Empresa::get(['id', 'nome']);
        $cursos = Curso::get(['id', 'nome']);
        $alunos = Aluno::get(['id', 'nome']);
        return view('estagios_mostrar', compact('estagio', 'empresas', 'cursos', 'alunos'));
    }

    /**
    * Função que mostra o formulário de criação de estagios na view.
    * @return Illuminate\Http\Response
    */
    public function create()
    {
        $empresas = Empresa::all();
        $cursos = Curso::all();
        return view('estagios_criar', compact('empresas', 'cursos'));
    }

    /**
    * Função que executa a criação de um estagio.
    * @param Illuminate\Support\Facades\Request
    * @return Illuminate\Http\RedirectResponse
    */
    public function runCreate(Request $request)
    {
        $this->validate($request, [
            'descricao' => 'required',
            'setor' => 'required',
            'bolsa' => 'number|required',
            'supervisor' => 'required',
            'idCurso' => 'required',
            'idEmpresa' => 'required',
        ]);
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

    /**
    * Função que executa a edição de um estagio.
    * @param Illuminate\Support\Facades\Request
    * @param App\Estagio
    * @return Illuminate\Http\RedirectResponse
    */
    public function runEdit(Request $request, Estagio $estagio)
    {
        $this->validate($request, [
            'descricao' => 'required',
            'setor' => 'required',
            'bolsa' => 'number|required',
            'supervisor' => 'required',
            'idCurso' => 'required',
            'idEmpresa' => 'required',
        ]);

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

    /**
    * Função que executa a exclusão de um estagio.
    * @param Illuminate\Support\Facades\Request
    * @param App\Estagio
    * @return array
    */
    public function runDelete(Request $request, Estagio $estagio)
    {
        $deleted = $estagio->delete();
        return compact('deleted');
    }

    /**
    * Função que adiciona um aluno ao estágio em questão.
    * @param Illuminate\Support\Facades\Request
    * @param App\Estagio
    * @return Illuminate\Http\RedirectResponse
    */
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

    /**
    * Função que remove um aluno do estágio em questão.
    * @param Illuminate\Support\Facades\Request
    * @param App\Estagio
    * @return array
    */
    public function runRemoveAluno(Request $request, Estagio $estagio)
    {
        $removed = $estagio->update([
            'idAluno' => null,
            'data_inicio' => null,
            'data_fim' => null,
            'aberta' => 1
        ]);
        return compact('removed');
    }
}
