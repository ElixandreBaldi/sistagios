<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Empresa;
use App\Endereco;

/**
* Controlador central das funções de Empresa
* @author Elixandre Baldi, Luiz Rosa, Victor Pozzan
* @version 1.0
*/
class EmpresasController extends Controller
{
    /**
    * Função que mostra a listagem de empresas na view.
    * @return Illuminate\Http\Response
    */
    public function show()
    {
        $empresas = Empresa::all();
        foreach($empresas as $empresa){
            $empresa->endereco = $empresa->endereco()->first();
        }
        return view('empresas', compact('empresas'));
    }

    /**
    * Função que mostra uma empresa específico na view.
    * @param App\Empresa
    * @return Illuminate\Http\Response
    */
    public function showOne(Empresa $empresa)
    {
        return view('empresas_mostrar',compact('empresa'));
    }

    /**
    * Função que mostra o formulário de criação de empresas na view.
    * @return Illuminate\Http\Response
    */
    public function create()
    {
        return view('empresas_criar');
    }

    /**
    * Função que executa a criação de empresas.
    * @param Illuminate\Support\Facades\Request
    * @return Illuminate\Http\RedirectResponse
    */
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
            'nome_rep' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'cpfcnpj' => 'required|cpfcnpj',
        ]);
        $idEndereco = Endereco::insertGetId([
            'CEP' => $request->cep,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf' => $request->estado,
        ]);
        Empresa::create([
            'nome' => $request->nome,
            'cpfcnpj' => $request->cpfcnpj,
            'telefone1' => $request->telefone,
            'email' => $request->email,
            'representante' => $request->nome_rep,
            'idEndereco' => $idEndereco,
        ]);
        return redirect('/empresas');
    }

    /**
    * Função que executa a edição de uma empresa.
    * @param Illuminate\Support\Facades\Request
    * @param App\Empresa
    * @return Illuminate\Http\RedirectResponse
    */
    public function runEdit(Request $request, Empresa $empresa)
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
            'nome_rep' => 'required|max:255|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'cpfcnpj' => 'required|cpfcnpj',
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

    /**
    * Função que executa a exclusão de uma empresa.
    * @param Illuminate\Support\Facades\Request
    * @param App\Empresa
    * @return array
    */
    public function runDelete(Request $request, Empresa $empresa)
    {
        $end = $empresa->idEndereco;
        $deleted = $empresa->delete();
        Endereco::where('id', $end)->delete();
        return compact('deleted');
    }
}
