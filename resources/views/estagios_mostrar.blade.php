@extends('layouts.app')

@section('titulo')
Atualizar Estágio
@endsection

@section('conteudo')
<div class="row content">
<button onclick="window.location.href='/estagios'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
    <h3 class="titulo_area">Atualizar Estágio</h3>
    <form method="POST" action="/estagios/{{$estagio->id}}/editar">
        {{csrf_field()}}
        <div class="form-group col-md-8">
            <label for="descricao">DESCRIÇÃO</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="{{$estagio->descricao}}">
        </div>
        <div class="form-group col-md-4">
            <label for="empresa">EMPRESA</label>
            <select class="form-control" name="empresa">
            @foreach($empresas as $empresa)
                <option value="{{$empresa->id}}" {{($estagio->idEmpresa == $empresa->id) ? 'selected' : ''}}>{{$empresa->nome}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group col-md-3">
          <label for="setor">SETOR</label>
          <input type="text" class="form-control" name="setor" id="setor" value="{{$estagio->setor}}">
        </div>
        <div class="form-group col-md-4">
          <label for="supervisor">SUPERVISOR</label>
          <input type="text" class="form-control" name="supervisor" id="supervisor" value="{{$estagio->supervisor}}">
        </div>
        <div class="form-group col-md-2">
          <label for="bolsa">BOLSA</label>
          <input type="number" class="form-control" name="bolsa" id="bolsa" value="{{$estagio->bolsa}}">
        </div>
        <div class="form-group col-md-3">
            <label for="curso">CURSO</label>
            <select class="form-control" name="curso">
            @foreach($cursos as $curso)
                <option value="{{$curso->id}}" {{($estagio->idCurso == $curso->id) ? 'selected' : ''}}>{{$curso->nome}}</option>
            @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-default">Atualizar</button>
        </div>
    </form>
</div>
@endsection
