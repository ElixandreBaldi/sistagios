@extends('layouts.app')

@section('titulo')
Professores
@endsection

@section('conteudo')
<div class="container-fluid sys">
    <div class="row">
        <div class="col-md-12 sys">
            <h1 class="master-titulo">SiStagios</h1>
            <h2 class="master-subtitulo">Sistema Gerenciador de Estágios</h2>
        </div>
    </div>
    <div class="row content">
        <button onclick="window.location.href='/menu'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
        <button data-toggle="modal" data-target="#modal-cadastrar" class="btn btn-primary"><span class="glyphicon glyphicon-asterisk"></span> Cadastrar novo</button>
        
        <h3 class="titulo_area">Professor</h3>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar...">
            <span class="input-group-btn">
                <button class="btn btn-default form-control" type="button"><span class="glyphicon glyphicon-search"></span></button>
            </span>
        </div>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">Editar Professor</div>
            <form role="form" method="POST" action="/professores/editar">
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
    </div>
    <!-- MENU TERMINA AQUI -->
    <p><br><br><br><a href="mailto:luizguilhermefr@gmail.com,victor_pozzan@hotmail.com,elixandre_michael@hotmail.com">Reportar Erro</a></p>
</div>
<!-- CONTEUDO TERMINA AQUI -->
@endsection
