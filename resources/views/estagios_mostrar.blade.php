@extends('layouts.app')

@section('titulo')
Atualizar Estágio
@endsection

@section('conteudo')
@if ($estagio->aberta == 1)
<div id="modal-add" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Empregar Aluno</h4>
            </div>
            <form method="POST" action="/estagios/{{$estagio->id}}/empregar">
                {{csrf_field()}}
                <div class="modal-body">
                    <label for="curso">ALUNO</label>
                    <select class="form-control" name="aluno">
                    @foreach($alunos as $aluno)
                        <option value="{{$aluno->id}}">{{$aluno->nome}}</option>
                    @endforeach
                    </select>
                    <br>
                    <label for="aluno">INÍCIO</label>
                    <input required="required" type="date" class="form-control" id="data_inicio"  name="data_inicio" value="{{date('Y-m-d')}}">
                    <br>
                    <label for="aluno">FIM</label>
                    <input type="date" class="form-control" id="data_fim" name="data_fim">
                    <br>
                    <button type="submit" class="btn btn-default">Empregar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif
<div class="row content">
<button onclick="window.location.href='/estagios'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
    <h3 class="titulo_area">Atualizar Estágio</h3>
    <form method="POST" action="/estagios/{{$estagio->id}}/editar">
        {{csrf_field()}}
        <div class="form-group col-md-12">
            <label for="descricao">DESCRIÇÃO</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="{{$estagio->descricao}}" autofocus>
        </div>
        <div class="form-group col-md-4">
            <label for="empresa">EMPRESA</label>
            <select class="form-control" name="empresa">
            @foreach($empresas as $empresa)
                <option value="{{$empresa->id}}" {{($estagio->idEmpresa == $empresa->id) ? 'selected' : ''}}>{{$empresa->nome}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group col-md-4">
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
        @if ($estagio->aberta == 0)
        <div class="form-group col-md-3">
            <label for="aluno">ALUNO</label>
            <input type="text" class="form-control" id="aluno" disabled value="{{$estagio->aluno->nome}}">
        </div>
        <div class="form-group col-md-2">
            <label for="aluno">INÍCIO</label>
            <input type="date" class="form-control" id="data_inicio" value="{{$estagio->data_inicio}}">
        </div>
        <div class="form-group col-md-2">
            <label for="aluno">FIM</label>
            <input type="date" class="form-control" id="data_fim" value="{{$estagio->data_fim}}">
        </div>
        @else
        <div class="form-group col-md-3">
            <label for="aluno">ALUNO</label>
            <input type="text" class="form-control" id="aluno" disabled>
        </div>
        <div class="form-group col-md-2">
            <label for="aluno">INÍCIO</label>
            <input type="date" class="form-control" id="data_inicio" disabled>
        </div>
        <div class="form-group col-md-2">
            <label for="aluno">FIM</label>
            <input type="date" class="form-control" id="data_fim" disabled>
        </div>
        @endif
        <div class="col-md-1">
            <button type="submit" class="btn btn-default">Atualizar</button>
        </div>
        @if ($estagio->aberta == 1)
        <div class="col-md-1">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-add"><span class="glyphicon glyphicon-user"></span> Empregar aluno</button>
        </div>
        @else
        <div class="col-md-1">
            <button type="button" class="btn btn-danger" onclick="removeAluno({{$estagio->id}})">Remover aluno</button>
        </div>
        @endif
    </form>
</div>
@endsection
