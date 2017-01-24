<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    //protected $redirectTo = '/cursos'; PRECISA??

    public function show()
    {
    	return view('/cursos');
    }
}
