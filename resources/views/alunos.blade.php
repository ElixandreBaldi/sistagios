@extends('layouts.app')

@section('titulo')
Alunos
@endsection

@section('conteudo')
@foreach($alunos as $aluno)
<div id="{{'modal-' . $aluno->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{$aluno->nome}}</h4>
            </div>
            <div class="modal-body">
                <p>{{$aluno->endereco->rua}}, {{$aluno->endereco->numero}} - {{$aluno->endereco->bairro}}</p>
                <p>{{$aluno->endereco->cidade}} - {{$aluno->endereco->uf}} - {{$aluno->endereco->CEP}}</p>
                <p>{{$aluno->telefone}}</p>
                <p>{{$aluno->email}}</p>
                <p>CPF: {{$aluno->cpf}}</p>
                <p>RG: {{$aluno->rg}}</p>
                <br>
                <p>Curso: {{$aluno->curso}}</p>
                <br>
                <p>Cadastro efetuado em: {{$aluno->created_at}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="row content">
<button onclick="window.location.href='/menu'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
    <button onclick="window.location.href='/alunos/criar'" class="btn btn-primary"><span class="glyphicon glyphicon-asterisk"></span> Cadastrar novo</button>
    <h3 class="titulo_area">Alunos</h3>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar...">
        <span class="input-group-btn">
            <button class="btn btn-default form-control" type="button"><span class="glyphicon glyphicon-search"></span></button>
        </span>
    </div>
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">Últimos Alunos Cadastrados</div>
        <table class="table">
            <tr>
                <td>
                    NOME
                </td>
                <td>
                    CURSO
                </td>
                <td>
                    FONE
                </td>
                <td>
                    AÇÕES
                </td>
            </tr>
            @foreach($alunos as $aluno)
            <tr>
                <td>
                    {{$aluno->nome}}
                </td>
                <td>
                    {{$aluno->curso}}
                </td>
                <td>
                    {{$aluno->telefone}}
                </td>
                <td>
                    <div class="btn-group" role="group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#{{'modal-' . $aluno->id}}"><span class="glyphicon glyphicon-eye-open"></span> Ver mais</button>
                        <button class="btn btn-info" onclick="window.location.href='/alunos/{{$aluno->id}}'"><span class="glyphicon glyphicon-edit"></span> Editar</button>
                        <button class="btn btn-danger" onclick="excluir({{$aluno->id}}, 'alunos')"><span class="glyphicon glyphicon-remove"></span> Excluir</button>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
