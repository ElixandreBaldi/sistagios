<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estagio extends Model
{
    public function empresa() {
    	return $this->belongsTo('App\Empresa', 'idEmpresa');
    }
    public function aluno() {
    	return $this->belongsTo('App\Aluno', 'idAluno');
    }
    public function curso() {
    	return $this->belongsTo('App\Curso', 'idCurso');
    }
}
