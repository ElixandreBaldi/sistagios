@extends('layouts.app')

@section('titulo')
Criar Aluno
@endsection

@section('conteudo')
<div class="row content">
    <button onclick="window.location.href='/estagios'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
    <h3 class="titulo_area">Cadastrar Vaga</h3>
    <form method="POST" action="/estagios/criar">
        {{csrf_field()}}
        <div class="form-group col-md-8">
            <label for="descricao">DESCRIÇÃO</label>
            <input type="text" class="form-control" id="descricao" name="descricao">
        </div>
        <div class="form-group col-md-4">
            <label for="empresa">EMPRESA</label>
            <select class="form-control" name="empresa">
            @foreach($empresas as $empresa)
                <option value="{{$empresa->id}}">{{$empresa->nome}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group col-md-3">
          <label for="setor">SETOR</label>
          <input type="text" class="form-control" name="setor" id="setor">
        </div>
        <div class="form-group col-md-4">
          <label for="supervisor">SUPERVISOR</label>
          <input type="text" class="form-control" name="supervisor" id="supervisor">
        </div>
        <div class="form-group col-md-2">
          <label for="bolsa">BOLSA</label>
          <input type="number" class="form-control" name="bolsa" id="bolsa">
        </div>
        <div class="form-group col-md-3">
            <label for="curso">CURSO</label>
            <select class="form-control" name="curso">
            @foreach($cursos as $curso)
                <option value="{{$curso->id}}">{{$curso->nome}}</option>
            @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-default">Cadastrar</button>
        </div>
    </form>
</div>
@endsection
