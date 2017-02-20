<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    protected $fillable = ['nome','cpfcnpj','representante','telefone1','telefone2','email'];
    public $timestamps = true;

    public function endereco() {
    	return $this->belongsTo('App\Endereco', 'idEndereco');
    }
}
