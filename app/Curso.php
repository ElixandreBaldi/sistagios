<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* Modelo para Curso
* @author Elixandre Baldi, Luiz Rosa, Victor Pozzan
* @version 1.0
*/
class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable = ['nome', 'turno', 'idProfessor'];
    public $timestamps = false;

    /**
    * Função para relacionamento de Curso com Coordenador.
    * @return Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function coordenador() {
        return $this->belongsTo('App\Professor', 'idProfessor');
    }
}
