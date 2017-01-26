@extends('layouts.app')

@section('titulo')
Criar Empresa
@endsection

@section('conteudo')
<div class="row content">
  <button onclick="window.location.href='/empresas'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
  <h3 class="titulo_area">Cadastrar Empresa</h3>
  <form>
    <div class="form-group col-md-6">
      <label for="nome">NOME</label>
      <input type="text" class="form-control" id="nome">
    </div>
    <div class="form-group col-md-3">
      <label for="estado">ESTADO</label>
      <select class="form-control" name="estado">
        <option value="PR">Paraná</option>
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option> 
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="nome">CIDADE</label>
      <input type="text" class="form-control" id="cidade">
    </div>
    <div class="form-group col-md-4">
      <label for="nome">RUA</label>
      <input type="text" class="form-control" id="rua">
    </div>
    <div class="form-group col-md-2">
      <label for="nome">NÚMERO</label>
      <input type="number" class="form-control" id="numero">
    </div>
    <div class="form-group col-md-3">
      <label for="nome">BAIRRO</label>
      <input type="text" class="form-control" id="bairro">
    </div>
    <div class="form-group col-md-3">
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
      <label for="nome">NOME REPRESENTANTE</label>
      <input type="text" class="form-control" id="nome_rep">
    </div>
    <div class="form-group col-md-6">
      <label for="nome">CNPJ</label>
      <div class="input-group">
        <span class="input-group-addon">
          <input type="radio" name="codigo" aria-label="..." checked="checked">
        </span>
        <input type="text" class="form-control" aria-label="..." name="cnpj">
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="nome">CPF</label>
      <div class="input-group">
        <span class="input-group-addon">
          <input type="radio" name="codigo" aria-label="...">
        </span>
        <input type="text" class="form-control" aria-label="..." name="cpf">
      </div>
    </div>
    <div class="col-md-6">
      <button type="submit" class="btn btn-default">Cadastrar</button>
    </div>
  </form>
</div>
@endsection