@extends('layouts.app')

@section('titulo')
Alunos
@endsection

@section('conteudo')
<div id="modal-ver-mais" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Eliseu Baldi</h4>
            </div>
            <div class="modal-body">
                <p>Rua Europa, 222 - MORUMBI</p>
                <p>CASCAVEL - PR - 85819-122</p>
                <p>(45) 9 9922 - 8585</p>
                <p>eliseu@hotmail.com</p>
                <p>CPF: 001.002.003-04</p>
                <p>RG: 01.002.003-4</p>
                <br>
                <p>Curso: Administração</p>
                <p>Supervisor: Eleonor</p>
                <br>
                <p>Cadastro efetuado em: 10/10/2016</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>
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
        <div class="panel-heading">Últimos Alunos Cadastradis</div>
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
            <tr>
                <td>
                    Eliseu Baldi
                </td>
                <td>
                    ADMINISTRAÇÃO
                </td>
                <td>
                    (45) 9 9922 - 8585
                </td>
                <td>
                    <div class="btn-group" role="group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-ver-mais"><span class="glyphicon glyphicon-eye-open"></span> Ver mais</button>
                        <button class="btn btn-info" onclick="window.location.href='/alunos/1'"><span class="glyphicon glyphicon-edit"></span> Editar</button>
                        <button class="btn btn-danger" onclick="alert_delete()"><span class="glyphicon glyphicon-remove"></span> Excluir</button>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
