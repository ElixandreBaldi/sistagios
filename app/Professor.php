<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* Modelo para Professor.
* @author Elixandre Baldi, Luiz Rosa, Victor Pozzan
* @version 1.0
*/
class Professor extends Model
{
    protected $table = 'professores';
    protected $fillable = ['nome', 'email'];
    public $timestamps = false;

    /**
    * Função para relacionamento de Professor com Curso.
    * @return Illuminate\Database\Eloquent\Relations\HasOne
    */
    public function curso() {
        return $this->hasOne('App\Curso', 'idProfessor');
    }
}
