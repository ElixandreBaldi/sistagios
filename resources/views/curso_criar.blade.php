@extends('layouts.app')

@section('titulo')
Criar Curso
@endsection

@section('conteudo')
<div class="row content">
  <button onclick="window.location.href='/cursos'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
  <h3 class="titulo_area">Cadastrar Curso</h3>
  <form role="form" method="POST" action="/cursos/criar">
    {{csrf_field()}}
    <div class="form-group col-md-6">
      <label for="nome">NOME</label>
      <input type="text" required="required" value="{{old('nome')}}" class="form-control" id="nome" name="nome" autofocus>
      @if ($errors->has('nome'))
          <span class="help-block">
              <strong>{{ $errors->first('nome') }}</strong>
          </span>
      @endif
    </div>
    <div class="form-group col-md-2">
      <label for="turno">Turno</label><br/>
      <input type="radio" name="turno" value="1"> Manhã<br/>
      <input type="radio" name="turno" value="2"> Tarde<br/>
      <input type="radio" name="turno" value="3"> Noite<br/>
      @if ($errors->has('turno'))
          <span class="help-block">
              <strong>{{ $errors->first('turno') }}</strong>
          </span>
      @endif
    </div>
    <div class="form-group col-md-4">
      <label for="estado">Coordenador</label>
      <select class="form-control" name="coordenador">
      @foreach ($professores as $professor)
        <option value="{{$professor->id}}">{{$professor->nome}}</option>
      @endforeach
      </select>
      @if ($errors->has('coordenador'))
          <span class="help-block">
              <strong>{{ $errors->first('coordenador') }}</strong>
          </span>
      @endif
    </div>
    <br/>
    <div class="col-md-12">
      <button type="submit" class="btn btn-default">Cadastrar</button>
    </div>
  </form>
</div>
@endsection
