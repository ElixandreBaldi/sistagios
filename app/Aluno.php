<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* Modelo para Aluno
* @author Elixandre Baldi, Luiz Rosa, Victor Pozzan
* @version 1.0
*/
class Aluno extends Model
{
    public $timestamps = true;
    protected $fillable = ['nome', 'rg', 'cpf', 'telefone', 'email', 'idCurso', 'idEndereco', 'created_at', 'updated_at'];

    /**
    * Função para relacionamento de Aluno com Curso.
    * @return Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function curso() {
        return $this->belongsTo('App\Curso', 'idCurso');
    }

    /**
    * Função para relacionamento de Aluno com Endereço.
    * @return Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function endereco() {
        return $this->belongsTo('App\Endereco', 'idEndereco');
    }
}
