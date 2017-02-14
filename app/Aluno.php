<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
  public $timestamps = false;
  protected $fillable = ['nome', 'rg', 'cpf', 'telefone', 'email', 'idCurso', 'idEndereco'];

  public function curso() {
      return $this->belongsTo('App\Curso', 'idCurso');
  }
  public function endereco() {
      return $this->belongsTo('App\Endereco', 'idEndereco');
  }
}
