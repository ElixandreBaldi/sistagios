@extends('layouts.app')

@section('titulo')
Empresas
@endsection

@section('conteudo')
<div id="modal-ver-mais" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">BIGOLIN Materiais de Construção e Decoração</h4>
            </div>
            <div class="modal-body">
                <p>Av. Rio Grande do Sul, 5200 - CENTRO</p>
                <p>CASCAVEL - PR - 85819-000</p>
                <p>(45) 3030 - 8080</p>
                <p>bigolin@bigolin.com.br</p>
                <p>CNPJ: 001.002.003/0001-01</p>
                <br>
                <p>Responsável: Eleonor</p>
                <p>Cadastro efetuado em: 12/12/2016</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>
<div class="row content">
<button onclick="window.location.href='/menu'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
    <button onclick="window.location.href='/empresas/criar'" class="btn btn-primary"><span class="glyphicon glyphicon-asterisk"></span> Cadastrar nova</button>
    <h3 class="titulo_area">Empresas</h3>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar...">
        <span class="input-group-btn">
            <button class="btn btn-default form-control" type="button"><span class="glyphicon glyphicon-search"></span></button>
        </span>
    </div>
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">Últimas Empresas Cadastradas</div>
        <table class="table">
            <tr>
                <td>
                    NOME
                </td>
                <td>
                    CIDADE
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
                    BIGOLIN Materiais de Construção e Decoração
                </td>
                <td>
                    CASCAVEL
                </td>
                <td>
                    (45) 3030 - 8080
                </td>
                <td>
                    <div class="btn-group" role="group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-ver-mais"><span class="glyphicon glyphicon-eye-open"></span> Ver mais</button>
                        <button class="btn btn-info" onclick="window.location.href='/empresas/1'"><span class="glyphicon glyphicon-edit"></span> Editar</button>
                        <button class="btn btn-danger" onclick="alert_delete()"><span class="glyphicon glyphicon-remove"></span> Excluir</button>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<!-- CONTEUDO TERMINA AQUI -->
@endsection
