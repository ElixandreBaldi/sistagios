@extends('layouts.app')

@section('titulo')
Criar Aluno
@endsection

@section('conteudo')
<div class="row content">
    <button onclick="window.location.href='/alunos'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
    <h3 class="titulo_area">Cadastrar Aluno</h3>
    <form method="POST" action="/alunos/criar">
        <div class="form-group col-md-6">
            <label for="nome">NOME</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group col-md-6">
            <label for="nome">RUA</label>
            <input type="text" class="form-control" id="rua" name="rua">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">NÚMERO</label>
            <input type="number" class="form-control" id="numero" name="numero">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">BAIRRO</label>
            <input type="text" class="form-control" id="bairro" name="bairro">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">TELEFONE</label>
            <input type="text" class="form-control" id="telefone" name="telefone">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">E-MAIL</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">CURSO</label>
            <select class="form-control" name="curso">
            @foreach($cursos as $curso)
                <option value="{{$curso->id}}">{{$curso->nome}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="nome">CPF</label>
            <input type="text" class="form-control"name="cpf">
        </div>
        <div class="form-group col-md-6">
            <label for="nome">RG</label>
            <input type="text" class="form-control"name="rg">
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-default">Cadastrar</button>
        </div>
    </form>
</div>
@endsection
