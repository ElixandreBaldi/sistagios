@extends('layouts.app')

@section('titulo')
Criar Usuário
@endsection

@section('conteudo')
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
@endsection
