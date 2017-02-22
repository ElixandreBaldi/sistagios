<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Professor;
use App\Curso;

/**
* Controlador central das funções de Curso
* @author Elixandre Baldi, Luiz Rosa, Victor Pozzan
* @version 1.0
*/
class CursosController extends Controller
{
    /**
    * Função que mostra a listagem de cursos na view.
    * @return Illuminate\Http\Response
    */
    public function show()
    {
        $cursos = Curso::all();
        foreach($cursos as $curso)
        {
            $curso->professor = $curso->coordenador()->first();
            switch ($curso->turno) {
                case 1:
                $curso->turno = 'Manhã';
                break;
                case 2:
                $curso->turno = 'Tarde';
                break;
                case 3:
                $curso->turno = 'Noite';
                break;
            }
        }
        return view('cursos',compact('cursos'));
    }

    /**
    * Função que mostra o formulário de criação de cursos na view.
    * @return Illuminate\Http\Response
    */
    public function createCurso(){
        $professores = Professor::select('id', 'nome') -> get();
        return view('curso_criar', compact('professores'));
    }

    /**
    * Função que executa a criação de um curso.
    * @param Illuminate\Support\Facades\Request
    * @return Illuminate\Http\RedirectResponse
    */
    public function runCreateCurso(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|max:255',
            'turno' => 'required', //editar?
            'coordenador' => 'required',
        ]);
        Curso::insert([
            'nome' => $request->nome,
            'turno' => $request->turno,
            'idProfessor' => $request->coordenador
        ]);
        return redirect('/cursos');
    }

    /**
    * Função que mostra um curso específico na view.
    * @param App\Curso
    * @return Illuminate\Http\Response
    */
    public function showOneCurso(Curso $curso){
        $professores = Professor::select('id', 'nome') -> get();
        return view('curso_mostrar',compact('curso'),compact('professores'));
    }

    /**
    * Função que executa a edição de um curso.
    * @param Illuminate\Support\Facades\Request
    * @param App\Curso
    * @return Illuminate\Http\RedirectResponse
    */
    public function runEditCurso(Request $request, Curso $curso){
        $this->validate($request, [
            'nome' => 'required|max:255',
            'turno' => 'required', //editar?
            'coordenador' => 'required',
        ]);
        $curso->update([
            'nome' => $request->nome,
            'turno' => $request->turno,
            'idProfessor' => $request->coordenador
        ]);
        return redirect('/cursos');
    }

    /**
    * Função que executa a exclusão de um curso.
    * @param Illuminate\Support\Facades\Request
    * @param integer
    * @return Illuminate\Http\RedirectResponse
    */
    public function runDeleteCurso(Request $request, $curso)
    {
        $deleted = Curso::where('id', $curso)->delete();
        return compact('deleted');
    }

    /**
    * Função que mostra a listagem de professores na view.
    * @return Illuminate\Http\Response
    */
    public function showProfessores()
    {
        $professores = Professor::all();

        return view('professores',compact('professores'));
    }

    /**
    * Função que executa a criação de um professor.
    * @param Illuminate\Support\Facades\Request
    * @return Illuminate\Http\RedirectResponse
    */
    public function runCreateProfessor(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/|max:255',
            'email' => 'required|email|unique:professores',
        ]);
        Professor::insert([
            'nome' => $request->nome,
            'email' => $request->email
        ]);
        return redirect('/professores');
    }

    /**
    * Função que mostra um professor específico na view.
    * @param App\Professor
    * @return Illuminate\Http\Response
    */
    public function showOneProfessor(Professor $professor){
        return view('professor_mostrar',compact('professor'));
    }

    /**
    * Função que executa a edição de um professor.
    * @param Illuminate\Support\Facades\Request
    * @param App\Professor
    * @return Illuminate\Http\RedirectResponse
    */
    public function runEditProfessor(Request $request, Professor $professor){
        $this->validate($request, [
            'nome' => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/|max:255',
            'email' => 'required|email',
        ]);
        $professor->update([
            'nome' => $request->nome,
            'email' => $request->email
        ]);
        return redirect('/professores/' . $professor->id);
    }

    /**
    * Função que executa a exclusão de um professor.
    * @param Illuminate\Support\Facades\Request
    * @param integer
    * @return array
    */
    public function runDeleteProfessor(Request $request, $professor){
        $deleted = Professor::where('id', $professor)->delete();
        return compact('deleted');
    }
}
