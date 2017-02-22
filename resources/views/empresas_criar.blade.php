@extends('layouts.app')

@section('titulo')
Criar Empresa
@endsection

@section('conteudo')

<div class="row content">
  <button onclick="window.location.href='/empresas'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
  <h3 class="titulo_area">Cadastrar Empresa</h3>
  <form action="/empresas/criar" method="POST">
    {{ csrf_field() }}    
    <div class="form-group col-md-6">
      <label for="nome">NOME</label>      
      <input type="text" required="required" onkeypress="somenteLetras( this )" class="form-control" name="nome" value="{{ old('nome') }}" id="nome">      
    </div>
    <div class="form-group col-md-3">      
      <label for="cep">CEP</label>      
      <input type="text" required="required" onblur="pesquisacep(this.value);" onkeypress="mascaraCep( this, event )" onkeyup="limitarInput(this, 9)" value="{{ old('cep') }}" name="cep" class="form-control" id="cep">      
    </div>
    <div class="form-group col-md-3">
      <label for="bairro">BAIRRO</label>
      <input type="text" required="required" class="form-control" value="{{ old('bairro') }}" name="bairro" id="bairro">
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
      <input type="text" required="required" class="form-control" name="rua" value="{{ old('rua') }}" id="rua">
    </div>
    <div class="form-group col-md-2">
      <label for="numero">NÚMERO</label>
      <input type="number" required="required" class="form-control" name="numero" value="{{ old('numero') }}" id="numero">
    </div>
    <div class="form-group col-md-3">
      <label for="cidade">CIDADE</label>
      <input type="text" required="required" class="form-control" name="cidade" value="{{ old('cidade') }}" id="cidade">
    </div>  
    <div class="form-group col-md-1">
      <label for="estado">ESTADO</label>
      <input type="text" required="required" class="form-control" id="estado" value="{{ old('estado') }}" name="estado" maxlength=2>      
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
      <input type="text" onkeypress="mascaraFone( this, event )" onkeyup="limitarInput(this, 16)" required="required" class="form-control" value="{{ old('telefone') }}" name="telefone" id="telefone">
    </div>
    <div class="form-group col-md-4">
      <label for="nome">E-MAIL</label>
      <input type="email" required="required" class="form-control" value="{{ old('email') }}" name="email" id="email">
    </div>
    <div class="form-group col-md-4">
      <label for="nome">NOME REPRESENTANTE</label>
      <input type="text" required="required" class="form-control" value="{{ old('nome_rep') }}" name="nome_rep" id="nome_rep">
    </div>
    <div class="col-md-12">
      <div class="col-md-4">
        @if ($errors->has('telefone'))
          <span class="help-block">
              <strong>{{ $errors->first('telefone') }}</strong>
          </span>        
        @endif
      </div>
      <div class="col-md-4">  
        @if ($errors->has('email'))
          <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>        
        @endif
      </div>
      <div class="col-md-4">  
        @if ($errors->has('nome_rep'))
          <span class="help-block">
              <strong>{{ $errors->first('nome_rep') }}</strong>
          </span>        
        @endif
      </div>      
    </div>
    <div class="form-group col-md-12">
      <label for="nome">CPF ou CNPJ</label>
      <input type="text" class="form-control" value="{{ old('cpfcnpj') }}" onkeypress="mascaraCpf( this, event )" required="required" onkeyup="limitarInput(this, 18)" aria-label="..." name="cpfcnpj">
      @if ($errors->has('cpfcnpj'))
          <span class="help-block">
              <strong>{{ $errors->first('cpfcnpj') }}</strong>
          </span>        
        @endif      
    </div>
    <div class="col-md-6">
      <button type="submit" class="btn btn-default">Cadastrar</button>
    </div>
  </form>
</div>
@endsection