<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empresa;

class EmpresasController extends Controller
{
    public function show()
    {
        return view('empresas');
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
    	Empresa::insert([
    		// data
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
      return redirect('/empresas/' + $empresa->id);
    }
}
