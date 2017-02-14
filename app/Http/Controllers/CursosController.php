<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Professor;
use App\Curso;
class CursosController extends Controller
{
    /*
        CURSO:
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
    public function createCurso(){
        $professores = Professor::select('id', 'nome') -> get();

        return view('curso_criar', compact('professores'));
    }
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
    public function showOneCurso(Curso $curso){

        $professores = Professor::select('id', 'nome') -> get();
        return view('curso_mostrar',compact('curso'),compact('professores'));
    }
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
    public function runDeleteCurso(Request $request, $curso)
    {
        $deleted = Curso::where('id', $curso)->delete();
        return compact('deleted'); 
    }
    /*
        PROFESSOR:
    */
    public function showProfessores()
    {
    	$professores = Professor::all();

		return view('professores',compact('professores'));
    }

    public function runCreateProfessor(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:professores',             
        ]);
    	Professor::insert([
    			'nome' => $request->nome,
    			'email' => $request->email  		
    		]);
        return redirect('/professores');
    }

    public function showOneProfessor(Professor $professor){
        return view('professor_mostrar',compact('professor'));
    }

    public function runEditProfessor(Request $request, Professor $professor){
        $this->validate($request, [
            'nome' => 'required|max:255',
            'email' => 'required|email',             
        ]);
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
