@extends('layouts.app')

@section('titulo')
Aluno: nome
@endsection

@section('conteudo')
<div class="row content">
<button onclick="window.location.href='/alunos'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
    <h3 class="titulo_area">{{$aluno->nome}}</h3>
    <form>
        <div class="form-group col-md-6">
            <label for="nome">NOME</label>
            <input type="text" class="form-control" id="nome" value="{{$aluno->nome}}">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">RUA</label>
            <input type="text" class="form-control" id="rua" value="{{$aluno->endereco->rua}}">
        </div>
        <div class="form-group col-md-2">
            <label for="nome">NÚMERO</label>
            <input type="number" class="form-control" id="numero" value="{{$aluno->endereco->numero}}">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">BAIRRO</label>
            <input type="text" class="form-control" id="bairro" value="{{$aluno->endereco->bairro}}">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">CEP</label>
            <input type="text" class="form-control" id="cep" value="{{$aluno->endereco->CEP}}">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">TELEFONE</label>
            <input type="text" class="form-control" id="fone" value="{{$aluno->telefone}}">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">E-MAIL</label>
            <input type="email" class="form-control" id="email" value="{{$aluno->email}}">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">CURSO</label>
            <select class="form-control" name="curso">
            @foreach($cursos as $curso)
                <option value="{{$curso->id}}" {{ ($curso->id == $aluno->idCurso) ? 'selected' : '' }}>{{$curso->nome}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="nome">NOME SUPERVISOR</label>
            <input type="text" class="form-control" id="nome_sup" value="Eleonor" disabled>
        </div>
        <div class="form-group col-md-6">
            <label for="nome">CPF</label>
            <input type="text" class="form-control"name="cpf" value="{{$aluno->cpf}}">
        </div>
        <div class="form-group col-md-6">
            <label for="nome">RG</label>
            <input type="text" class="form-control"name="rg" value="{{$aluno->rg}}">
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-default">Atualizar</button>
        </div>
    </form>
</div>
@endsection
