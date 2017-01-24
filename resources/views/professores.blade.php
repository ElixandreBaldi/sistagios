@extends('layouts.app')

@section('titulo')
Cursos
@endsection

@section('conteudo')

<div id="modal-ver-mais" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Informática</h4>
            </div>
            <div class="modal-body">
                <p>Manhã</p>
                <br>
                <p>Coordenador: André Jandrey</p>
                <p>jandray@hotmail.com</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid sys">
    <div class="row">
        <div class="col-md-12 sys">
            <h1 class="master-titulo">SiStagios</h1>
            <h2 class="master-subtitulo">Sistema Gerenciador de Estágios</h2>
        </div>
    </div>
    <div class="row content">
        <button onclick="window.location.href='/menu'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
        <button onclick="window.location.href='/curso/novo'" class="btn btn-primary"><span class="glyphicon glyphicon-asterisk"></span> Cadastrar novo</button>
        <button onclick="window.location.href='/professor/novo'" class="btn btn-primary"><span class="glyphicon glyphicon-asterisk"></span> Cadastrar Professor</button>
        <button onclick="window.location.href='/professor/novo'" class="btn btn-primary"><span class="glyphicon glyphicon-asterisk"></span> Professores</button>

        <h3 class="titulo_area">Cursos</h3>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar...">
            <span class="input-group-btn">
                <button class="btn btn-default form-control" type="button"><span class="glyphicon glyphicon-search"></span></button>
            </span>
        </div>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">Últimas Cursos Cadastrados</div>
            <table class="table">
                <tr>
                    <th>
                        NOME
                    </th>
                    <th>
                        TURNO
                    </th>
                    <th>
                        Coordenador
                    </th>
                    <th>
                        AÇÕES
                    </th>
                </tr>
                <tr>
                    <td>
                        Informática
                    </td>
                    <td>
                        Manhã
                    </td>
                    <td>
                        Jandrey
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-ver-mais"><span class="glyphicon glyphicon-eye-open"></span> Ver mais</button>
                            <button class="btn btn-info" onclick="window.location.href='#'"><span class="glyphicon glyphicon-edit"></span> Editar</button>
                            <button class="btn btn-danger" onclick="alert_delete()"><span class="glyphicon glyphicon-remove"></span> Excluir</button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- MENU TERMINA AQUI -->
    <p><br><br><br><a href="mailto:luizguilhermefr@gmail.com,victor_pozzan@hotmail.com,elixandre_michael@hotmail.com">Reportar Erro</a></p>
</div>
<!-- CONTEUDO TERMINA AQUI -->
@endsection
