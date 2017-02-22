@extends('layouts.app')

@section('titulo')
Aluno: {{$aluno->nome}}
@endsection

@section('conteudo')
<div class="row content">
<button onclick="window.location.href='/alunos'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
    <h3 class="titulo_area">{{$aluno->nome}}</h3>
    <form method="POST" action="/alunos/{{$aluno->id}}/editar">
        {{csrf_field()}}
        <div class="form-group col-md-6">
            <label for="nome">NOME</label>
            <input type="text" required="required" onkeypress="somenteLetras( this )" class="form-control" id="nome" name="nome" value="{{$aluno->nome}}" autofocus>
        </div>
        <div class="form-group col-md-3">
          <label for="cep">CEP</label>
          <input type="text" required="required" onblur="pesquisacep(this.value);" onkeypress="mascaraCep( this, event )" onkeyup="limitarInput(this, 9)" name="cep" class="form-control" id="cep" value="{{$aluno->endereco->CEP}}">
        </div>
        <div class="form-group col-md-3">
          <label for="bairro">BAIRRO</label>
          <input type="text" required="required" class="form-control" name="bairro" id="bairro" value="{{$aluno->endereco->bairro}}">
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
          <input type="text" class="form-control" name="rua" id="rua" value="{{$aluno->endereco->rua}}">
        </div>
        <div class="form-group col-md-2">
          <label for="numero">NÚMERO</label>
          <input type="number" required="required" class="form-control" name="numero" id="numero" value="{{$aluno->endereco->numero}}">
        </div>
        <div class="form-group col-md-3">
          <label for="cidade">CIDADE</label>
          <input type="text" required="required" class="form-control" name="cidade" id="cidade" value="{{$aluno->endereco->cidade}}">
        </div>
        <div class="form-group col-md-1">
          <label for="estado">ESTADO</label>
          <input type="text" required="required" class="form-control" id="estado" name="estado" value="{{$aluno->endereco->uf}}" maxlength=2>
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
          <input type="text" required="required" onkeypress="mascaraFone( this, event )" onkeyup="limitarInput(this, 16)" class="form-control" name="telefone" id="telefone"  value="{{$aluno->telefone}}">
        </div>
        <div class="form-group col-md-4">
          <label for="nome">E-MAIL</label>
          <input type="email" required="required" class="form-control" name="email" id="email" value="{{$aluno->email}}">
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
            <label for="nome">CPF</label>
            <input type="text" value="{{$aluno->cpfcnpj}}" onkeypress="mascaraCpfApenas( this, event )" required="required" onkeyup="limitarInput(this, 14)" class="form-control" name="cpf" value="{{$aluno->cpf}}">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">RG</label>
            <input type="text" class="form-control" value="{{$aluno->rg}}" onkeypress="mascaraRg( this, event )" required="required" onkeyup="limitarInput(this, 12)" name="rg" value="{{$aluno->rg}}">
        </div>
        <div class="form-group col-md-4">
            <label for="nome">NOME SUPERVISOR</label>
            <input type="text" class="form-control" id="nome_sup" value="Eleonor" disabled>
        </div>
        <div class="col-md-12">
          <div class="col-md-4">
            @if ($errors->has('cpf'))
              <span class="help-block">
                  <strong>{{ $errors->first('cpf') }}</strong>
              </span>
            @endif
          </div>
          <div class="col-md-4">
            @if ($errors->has('rg'))
              <span class="help-block">
                  <strong>{{ $errors->first('rg') }}</strong>
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
        <div class="col-md-6">
            <button type="submit" class="btn btn-default">Atualizar</button>
        </div>
    </form>
</div>
@endsection
