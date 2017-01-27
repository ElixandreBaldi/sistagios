@extends('layouts.app')

@section('titulo')
Criar Aluno
@endsection

@section('conteudo')
<div class="row content">
<button onclick="window.location.href='/alunos'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
  <h3 class="titulo_area">Cadastrar Aluno</h3>
  <form>
    <div class="form-group col-md-6">
      <label for="nome">NOME</label>
      <input type="text" class="form-control" id="nome">
    </div>
    <div class="form-group col-md-4">
      <label for="nome">RUA</label>
      <input type="text" class="form-control" id="rua">
    </div>
    <div class="form-group col-md-2">
      <label for="nome">NÚMERO</label>
      <input type="number" class="form-control" id="numero">
    </div>
    <div class="form-group col-md-4">
      <label for="nome">BAIRRO</label>
      <input type="text" class="form-control" id="bairro">
    </div>
    <div class="form-group col-md-4">
      <label for="nome">CEP</label>
      <input type="text" class="form-control" id="cep">
    </div>
    <div class="form-group col-md-4">
      <label for="nome">TELEFONE</label>
      <input type="text" class="form-control" id="fone">
    </div>
    <div class="form-group col-md-4">
      <label for="nome">E-MAIL</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group col-md-4">
      <label for="nome">CURSO</label>
      <select class="form-control" name="curso">
        <option value="1">Administração</option>
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
      <input type="text" class="form-control" id="nome_sup">
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