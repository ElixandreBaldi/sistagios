@extends('layouts.app')

@section('titulo')
Professores
@endsection

@extends('layouts.app')

@section('titulo')
Empresa: Nome
@endsection

@section('conteudo')
  <div class="row content">
    <button onclick="window.location.href='/empresas'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
    <h3 class="titulo_area">Editar Professor {{$professor -> nome}}</h3>
    <form role="form" method="POST" action="/professores/{{$professor -> id}}/editar">
        {{ csrf_field() }}                   
        <div class="modal-body col-md-12">
            <div class="form-group col-md-12">
                <label for="nome">NOME</label>
                <input type="text" class="form-control" value="{{$professor -> nome}}" id="nome" name="nome">
            </div>
            <div class="form-group col-md-12">
                <label for="email">E-MAIL</label>
                <input type="text" class="form-control" value="{{$professor -> email}}" id="email" name="email">
            </div>                
        </div>            
        
        <div class="modal-footer">
            <button type="submit" class="btn btn-default" >Enviar</button>
        </div>
    </form>
  </div>
@endsection            