<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* Modelo para Empresa
* @author Elixandre Baldi, Luiz Rosa, Victor Pozzan
* @version 1.0
*/
class Empresa extends Model
{
    protected $table = 'empresas';
    protected $fillable = ['nome','cpfcnpj','representante','telefone1','telefone2','email','idEndereco'];
    public $timestamps = true;

    /**
    * Função para relacionamento de Empresa com Endereço.
    * @return Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function endereco() {
        return $this->belongsTo('App\Endereco', 'idEndereco');
    }
}
