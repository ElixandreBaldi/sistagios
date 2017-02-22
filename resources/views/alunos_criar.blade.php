@extends('layouts.app')

@section('titulo')
Criar Aluno
@endsection

@section('conteudo')
<div class="row content">
    <button onclick="window.location.href='/alunos'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
    <h3 class="titulo_area">Cadastrar Aluno</h3>
    <form method="POST" action="/alunos/criar">
        {{csrf_field()}}
        <div class="form-group col-md-6">
            <label for="nome">NOME</label>
            <input type="text" class="form-control" onkeypress="somenteLetras( this )" value="{{old('nome')}}" id="nome" name="nome" required="required">
        </div>
        <div class="form-group col-md-3">
          <label for="cep">CEP</label>
          <input type="text" onblur="pesquisacep(this.value);" onkeypress="mascaraCep( this, event )" onkeyup="limitarInput(this, 9)" value="{{old('cep')}}" required="required" name="cep" class="form-control" id="cep">
        </div>
        <div class="form-group col-md-3">
          <label for="bairro">BAIRRO</label>
          <input type="text" class="form-control" required="required" value="{{old('bairro')}}" name="bairro" id="bairro">
        </div>
        <div class="col-md-12">
          <div class="col-md-6">
            @if ($errors->has('nome'))
              <span class="help-block">
                  <strong>{{ $errors->first('nome') }}</strong>
              </span>
            @endif
          </div>
          <div class="col-md-3">
            @if ($errors->has('cep'))
              <span class="help-block">
                  <strong>{{ $errors->first('cep') }}</strong>
              </span>
            @endif
          </div>
          <div class="col-md-3">
            @if ($errors->has('bairro'))
              <span class="help-block">
                  <strong>{{ $errors->first('bairro') }}</strong>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="rua">RUA</label>
          <input type="text" class="form-control" required="required" value="{{old('rua')}}" name="rua" id="rua">
        </div>
        <div class="form-group col-md-2">
          <label for="numero">NÚMERO</label>
          <input type="number" class="form-control" required="required" value="{{old('numero')}}" name="numero" id="numero">
        </div>
        <div class="form-group col-md-3">
          <label for="cidade">CIDADE</label>
          <input type="text" class="form-control" required="required" value="{{old('cidade')}}" name="cidade" id="cidade">
        </div>
        <div class="form-group col-md-1">
          <label for="estado">ESTADO</label>
          <input type="text" class="form-control" required="required" value="{{old('estado')}}" id="estado" name="estado" maxlength=2>
        </div>
        <div class="col-md-12">
          <div class="col-md-6">
            @if ($errors->has('rua'))
              <span class="help-block">
                  <strong>{{ $errors->first('rua') }}</strong>
              </span>
            @endif
          </div>
          <div class="col-md-2">
            @if ($errors->has('numero'))
              <span class="help-block">
                  <strong>{{ $errors->first('numero') }}</strong>
              </span>
            @endif
          </div>
          <div class="col-md-3">
            @if ($errors->has('cidade'))
              <span class="help-block">
                  <strong>{{ $errors->first('cidade') }}</strong>
              </span>
            @endif
          </div>
          <div class="col-md-1">
            @if ($errors->has('estado'))
              <span class="help-block">
                  <strong>{{ $errors->first('estado') }}</strong>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="nome">TELEFONE</label>
          <input type="text" class="form-control" required="required" value="{{old('telefone')}}" onkeypress="mascaraFone( this, event )" onkeyup="limitarInput(this, 16)" name="fone" id="fone">
        </div>
        <div class="form-group col-md-4">
          <label for="nome">E-MAIL</label>
          <input type="email" required="required" value="{{old('email')}}" class="form-control" name="email" id="email">
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
            <input type="text" value="{{old('cpf')}}" onkeypress="mascaraCpfApenas( this, event )" required="required" onkeyup="limitarInput(this, 14)" class="form-control" name="cpf">
        </div>
        <div class="form-group col-md-6">
            <label for="nome">RG</label>
            <input type="text" class="form-control" value="{{old('rg')}}" onkeypress="mascaraRg( this, event )" required="required" onkeyup="limitarInput(this, 12)" name="rg">
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-default">Cadastrar</button>
        </div>
    </form>
</div>
@endsection
