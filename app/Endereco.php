<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* Modelo para Endereço
* @author Elixandre Baldi, Luiz Rosa, Victor Pozzan
* @version 1.0
*/
class Endereco extends Model
{
    protected $fillable = ['CEP', 'rua', 'numero', 'bairro', 'cidade', 'uf'];
    public $timestamps = false;
}
