<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable = ['nome', 'turno', 'idProfessor'];
    public $timestamps = false;

    public function coordenador() {
    	return $this->belongsTo('App\Professor', 'idProfessor');
    }
}
