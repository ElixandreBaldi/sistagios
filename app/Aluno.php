<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
  public $timestamps = false;

  public function curso() {
      return $this->belongsTo('App\Curso', 'idCurso');
  }
  public function endereco() {
      return $this->belongsTo('App\Endereco', 'idEndereco');
  }
}
