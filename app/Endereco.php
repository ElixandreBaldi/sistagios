<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['CEP', 'rua', 'numero', 'bairro', 'cidade', 'uf'];
    public $timestamps = false;
}
