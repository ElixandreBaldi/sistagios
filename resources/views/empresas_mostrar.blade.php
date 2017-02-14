@extends('layouts.app')

@section('titulo')
Empresa: Nome
@endsection

@section('conteudo')
  <div class="row content">
    <button onclick="window.location.href='/empresas'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
    <h3 class="titulo_area">BIGOLIN Materiais de Construção e Decoração</h3>
    <form>
      <div class="form-group col-md-6">
        <label for="nome">NOME</label>
        <input type="text" class="form-control" id="nome" value="BIGOLIN Materiais de Construção e Decoração">        
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
          <option value="PR" selected>Paraná</option>
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
        <input type="text" class="form-control" id="cidade" value="CASCAVEL">
      </div>
      <div class="form-group col-md-6">
        <label for="nome">RUA</label>
        <input type="text" class="form-control" id="rua" value="Av. Rio Grande do Sul">
      </div>
      <div class="form-group col-md-3">
        <label for="nome">BAIRRO</label>
        <input type="text" class="form-control" id="bairro" value="CENTRO">
      </div>
      <div class="form-group col-md-3">
        <label for="nome">CEP</label>
        <input type="text" class="form-control" id="cep" value="85819-000">
      </div>
      <div class="form-group col-md-4">
        <label for="nome">TELEFONE</label>
        <input type="text" class="form-control" id="fone" value="(45) 3030 - 8080">
      </div>
      <div class="form-group col-md-4">
        <label for="nome">E-MAIL</label>
        <input type="text" class="form-control" id="email" value="bigolin@bigolin.com.br">
      </div>
      <div class="form-group col-md-4">
        <label for="nome">NOME REPRESENTANTE</label>
        <input type="text" class="form-control" id="nome_rep" value="Eleonor">
      </div>
      <div class="form-group col-md-6">
        <label for="nome">CNPJ</label>
        <div class="input-group">
          <span class="input-group-addon">
            <input type="radio" name="codigo" checked="checked">
          </span>
          <input type="text" class="form-control" name="cnpj" value="001.002.003/0001-01">
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="nome">CPF</label>
        <div class="input-group">
          <span class="input-group-addon">
            <input type="radio" name="codigo">
          </span>
          <input type="text" class="form-control" name="cpf">
        </div>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-default">Atualizar</button>
      </div>
    </form>
  </div>
@endsection