@extends('layouts.app')

@section('titulo')
Editar Curso
@endsection

@section('conteudo')
<div class="row content">
  <button onclick="window.location.href='/cursos'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
  <h3 class="titulo_area">Editar Curso</h3>
  <form role="form" method="POST" action="/cursos/editar">
    {{csrf_field()}}
    <div class="form-group col-md-6">
      <label for="nome">NOME</label>
      <input type="text" class="form-control" id="nome" name="nome" value="{{$curso->nome}}">
    </div>
    <div class="form-group col-md-2">
      <label for="turno">Turno</label><br/>
      <input type="radio" name="turno" value="1" {{($curso->turno==1) ? 'checked' : ''}}> Manhã<br/>
      <input type="radio" name="turno" value="2" {{($curso->turno==2) ? 'checked' : ''}}> Tarde<br/>
      <input type="radio" name="turno" value="3" {{($curso->turno==3) ? 'checked' : ''}}> Noite
    </div>
    <div class="form-group col-md-4">
      <label for="estado">Coordenador</label>
      <select class="form-control" name="coordenador">
      @foreach ($professores as $professor)
        <option value="{{$professor->id}}" {{($curso->idProfessor == $professor->id) ? 'selected' : ''}}>{{$professor->nome}}</option>  
      @endforeach
      </select>
    </div>    
    <div class="col-md-6">
      <button type="submit" class="btn btn-default">Cadastrar</button>
    </div>
  </form>
</div>
@endsection