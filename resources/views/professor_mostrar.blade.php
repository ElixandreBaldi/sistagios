@extends('layouts.app')

@section('titulo')
Editar Professor
@endsection

@section('conteudo')
  <div class="row content">
    <button onclick="window.location.href='/professores'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
    <h3 class="titulo_area">Editar Professor {{$professor -> nome}}</h3>
    <form role="form" method="POST" action="/professores/{{$professor -> id}}/editar">
        {{ csrf_field() }}
        <div class="modal-body col-md-12">
            <div class="form-group col-md-12">
                <label for="nome">NOME</label>
                <input type="text" class="form-control" value="{{$professor -> nome}}" onkeypress="somenteLetras( this )" id="nome" name="nome" required="required" autofocus>
                @if ($errors->has('nome'))
                  <span class="help-block">
                      <strong>{{ $errors->first('nome') }}</strong>
                  </span>
                @endif
            </div>
            <div class="form-group col-md-12">
                <label for="email">E-MAIL</label>
                <input type="email" class="form-control" value="{{$professor -> email}}" id="email" name="email" required="required">
                @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-default" >Enviar</button>
        </div>
    </form>
  </div>
@endsection
