@extends('layouts.app')

@section('titulo')
Criar Usuário
@endsection

@section('conteudo')
<!-- CONTEUDO COMEÇA AQUI -->
<div class="container-fluid sys">
    <!-- TITULO COMEÇA AQUI -->
    <div class="row">
        <div class="col-md-12 sys">
            <h1 class="master-titulo">SiStagios</h1>
            <h2 class="master-subtitulo">Sistema Gerenciador de Estágios</h2>
        </div>
    </div>
    <!-- TITULO TERMINA AQUI -->
    <!-- MENU COMEÇA AQUI -->
    <div class="row content">
    <button onclick="window.location.href='/menu'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
        <h3 class="titulo_area">Cadastrar Usuário</h3>
        <form role="form" method="POST" action="/usuarios/novo">
            {{ csrf_field() }}
            <div class="form-group col-md-12">
                <label for="nome">NOME</label>
                <input type="text" class="form-control" id="nome" name="name">
            </div>
            <div class="form-group col-md-12">
                <label for="nome">USUARIO</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group col-md-12">
                <label for="nome">SENHA</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </div>
        </form>
    </div>
    <!-- MENU TERMINA AQUI -->
    <p><br><br><a href="mailto:luizguilhermefr@gmail.com,victor_pozzan@hotmail.com,elixandre_michael@hotmail.com">Reportar Erro</a></p>
</div>
<!-- CONTEUDO TERMINA AQUI -->
@endsection
