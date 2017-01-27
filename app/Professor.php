<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professores';
    protected $fillable = ['nome', 'email'];
    public $timestamps = false;

    public function curso() {
    	return $this->hasOne('App\Curso', 'idProfessor');
    }
}
