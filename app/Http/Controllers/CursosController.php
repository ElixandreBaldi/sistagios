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
        if(is_null($cursos))
            return view('cursos');
        foreach($cursos as $curso){
            $curso->professor = $curso->coordenador()->first()->value('nome');
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
        Curso::insert([
                'nome' => $request->nome,
                'turno' => $request->turno,
                'idProfessor' => $request->coordenador
            ]);
        return redirect('/cursos');
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
