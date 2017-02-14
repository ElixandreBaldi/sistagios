<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Empresa;

class EmpresasController extends Controller
{
    public function show()
    {
        $empresas = Empresa::all();
        foreach($empresas as $empresa){
            $empresa->endereco = $empresa->endereco()->first();
        }
        return view('empresas', compact('empresas'));
    }

    public function showOne(Empresa $empresa)
    {
        return view('empresas_mostrar');
    }

    public function create()
    {
    	return view('empresas_criar');
    }

    public function runCreate(Request $request)
    {    
        $this->validate($request, [
            'nome' => 'required|max:255',
            'cep' => 'required',
            'bairro' => 'required',
            'rua' => 'required',
            'numero' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'nome_rep' => 'required',            
            'cnpjcpf' => 'required'
        ]);

        Empresa::insert([
                'nome' => $request->nome,
                'cep' => $request->cep,
                'bairro' => $request->bairro,
                'rua' => $request->rua,
                'numero' => $request->numero,
                'cidade' => $request->cidade,
                'estado' => $request->estado,
                'telefone' => $request->telefone,
                'email' => $request->email,
                'nome_rep' => $request->nome_rep,                
            ]);

      return redirect('/empresas');
    }

    public function runEdit(Request $request, Empresa $empresa)
    {
        echo 'ss';
    	/*$empresa->update([
    		// data
    	]);
      return redirect('/empresas/' + $empresa->id);*/
    }

    public function runDelete(Request $request, Empresa $empresa)
    {
    	$empresa->delete();
      return redirect('/empresas');
    }
}
