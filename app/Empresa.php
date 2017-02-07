<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    public $timestamps = true;

    public function endereco() {
    	return $this->belongsTo('App\Endereco', 'idEndereco');
    }
}
