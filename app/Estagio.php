<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* Modelo para Estágio
* @author Elixandre Baldi, Luiz Rosa, Victor Pozzan
* @version 1.0
*/
class Estagio extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'descricao',
        'setor',
        'bolsa',
        'aberta',
        'supervisor',
        'idCurso',
        'idEmpresa',
        'idAluno',
        'data_inicio',
        'data_fim',
        'created_at',
        'updated_at'
    ];

    /**
    * Função para relacionamento de Estágio com Empresa.
    * @return Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function empresa() {
        return $this->belongsTo('App\Empresa', 'idEmpresa');
    }

    /**
    * Função para relacionamento de Estágio com Aluno.
    * @return Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function aluno() {
        return $this->belongsTo('App\Aluno', 'idAluno');
    }

    /**
    * Função para relacionamento de Estágio com Curso.
    * @return Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function curso() {
        return $this->belongsTo('App\Curso', 'idCurso');
    }
}
