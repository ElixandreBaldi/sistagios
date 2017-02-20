<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Empresa;
use App\Endereco;

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
        return view('empresas_mostrar',compact('empresa'));
    }

    public function create()
    {
    	return view('empresas_criar');
    }

    public function runCreate(Request $request)
    {            
        $this->validate($request, [
            'nome' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'cep' => 'required|regex:/^[0-9]{5}\-[0-9]{3}$/',
            'bairro' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'rua' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'numero' => 'required|numeric',
            'cidade' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'estado' => 'required|regex:/^[A-Z]{2}$/',
            'telefone' => 'required|',
            'email' => 'required|email',
            'nome_rep' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',            
            'cpfcnpj' => 'required',
        ]);        
        $idEndereco = Endereco::insertGetId([
                'CEP' => $request->cep,                
                'rua' => $request->rua,
                'numero' => $request->numero,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'uf' => $request->estado,
            ]);

        Empresa::insert([
                'nome' => $request->nome,                
                'cpfcnpj' => $request->cpfcnpj,
                'telefone1' => $request->telefone,
                'email' => $request->email,
                'representante' => $request->nome_rep,     
                'idEndereco' => $idEndereco,
            ]);        

      return redirect('/empresas');
    }

    public function runEdit(Request $request, Empresa $empresa)
    {        
        $this->validate($request, [
            'nome' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'cep' => 'required|regex:/^[0-9]{5}\-[0-9]{3}$/',
            'bairro' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'rua' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'numero' => 'required|numeric',
            'cidade' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'estado' => 'required|regex:/^[A-Z]{2}$/',
            'telefone' => 'required|',
            'email' => 'required|email',
            'nome_rep' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',            
            'cpfcnpj' => 'required',
        ]);
        
        $empresa->endereco->update([
            'CEP' => $request->cep,                
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf' => $request->estado,
        ]);

    	$empresa->update([
    		'nome' => $request->nome,                
            'cpfcnpj' => $request->cpfcnpj,
            'representante' => $request->nome_rep,        
            'telefone1' => $request->telefone,
            'email' => $request->email            
    	]);

      return redirect('/empresas/');
    }

    public function runDelete(Request $request, Empresa $empresa)
    {
    	$empresa->delete();
      return redirect('/empresas');
    }
}
