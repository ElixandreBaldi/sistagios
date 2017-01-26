@extends('layouts.app')

@section('titulo')
Aluno: nome
@endsection

@section('conteudo')
<div class="row content">
<button onclick="window.location.href='/alunos'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
    <h3 class="titulo_area">Eliseu Baldi</h3>
    <form>
        <div class="form-group col-md-6">
            <label for="nome">NOME</label>
            <input type="text" class="form-control" id="nome" value="Eliseu Baldi">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">RUA</label>
            <input type="text" class="form-control" id="rua" value="Rua Europa">
        </div>
        <div class="form-group col-md-2">
            <label for="nome">NÚMERO</label>
            <input type="number" class="form-control" id="numero" value="222">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">BAIRRO</label>
            <input type="text" class="form-control" id="bairro" value="MORUMBI">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">CEP</label>
            <input type="text" class="form-control" id="cep" value="85819-222">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">TELEFONE</label>
            <input type="text" class="form-control" id="fone" value="(45) 9 9922 - 8585">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">E-MAIL</label>
            <input type="email" class="form-control" id="email" value="eliseu@hotmail.com">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">CURSO</label>
            <select class="form-control" name="curso">
                <option value="1" selected>Administração</option>
                <option value="2">Edificações</option>
                <option value="3">Eletromecânica</option>
                <option value="4">Eletrônica</option> 
                <option value="5">Enfermagem</option>
                <option value="6">Especialização em Enfermagem do Trabalho</option>
                <option value="7">Informática</option>
                <option value="8">Meio Ambiente</option>
                <option value="9">Segurança do Trabalho</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="nome">NOME SUPERVISOR</label>
            <input type="text" class="form-control" id="nome_sup" value="Eleonor">
        </div>
        <div class="form-group col-md-6">
            <label for="nome">CPF</label>
            <input type="text" class="form-control"name="cpf" value="001.002.003-04">
        </div>
        <div class="form-group col-md-6">
            <label for="nome">RG</label>
            <input type="text" class="form-control"name="rg" value="01.002.003-4">
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-default">Atualizar</button>
        </div>
    </form>
</div>
@endsection
