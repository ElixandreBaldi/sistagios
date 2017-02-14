@extends('layouts.app')

@section('titulo')
Estágios
@endsection

@section('conteudo')
@foreach($estagios as $estagio)
<div id="{{'modal-' . $estagio->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"># {{$estagio->id}}</h4>
            </div>
            <div class="modal-body">
                <p><strong>{{$estagio->descricao}}</strong></p>
                <p>Empresa: <a href='/empresas/{{$estagio->idEmpresa}}'>{{$estagio->empresa->nome}}</a></p>
                <p>Curso: {{$estagio->curso->nome}}</p>
                <p>Setor: {{$estagio->setor}}</p>
                <p>Responsável: {{$estagio->supervisor}}</p>
                <p>Bolsa: R$ {{$estagio->bolsa}}</p>
                @if ($estagio->aberta==1)
                <p>Vaga Aberta</p>
                @else
                <p>Aluno: <a href='/alunos/{{$estagio->idAluno}}'>{{$estagio->aluno->nome}}</a></p>
                @endif
                <br>
                <p>Vaga cadastrada em: {{$estagio->created_at}}</p>
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
    <button onclick="window.location.href='/estagios/criar'" class="btn btn-primary"><span class="glyphicon glyphicon-asterisk"></span> Cadastrar vaga</button>
    <h3 class="titulo_area">Estágios</h3>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar...">
        <span class="input-group-btn">
            <button class="btn btn-default form-control" type="button"><span class="glyphicon glyphicon-search"></span></button>
        </span>
    </div>
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">Últimas Vagas Cadastradas</div>
        <table class="table">
            <tr>
                <td>
                    EMPRESA
                </td>
                <td>
                    CURSO
                </td>
                <td>
                    BOLSA
                </td>
                <td>
                    STATUS
                </td>
                <td>
                    AÇÕES
                </td>
            </tr>
            @foreach($estagios as $estagio)
            <tr>
                <td>
                    {{$estagio->empresa->nome}}
                </td>
                <td>
                    {{$estagio->curso->nome}}
                </td>
                <td>
                    R$ {{$estagio->bolsa}}
                </td>
                <td>
                    @if($estagio->aberta == 1)
                        <span class='label  label-success info-label'>Disponível</span>
                    @else
                        <span class='label  label-danger info-label'>Ocupada</span>
                    @endif
                </td>
                <td>
                    <div class="btn-group" role="group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#{{'modal-' . $estagio->id}}"><span class="glyphicon glyphicon-eye-open"></span> Ver mais</button>
                        <button class="btn btn-info" onclick="window.location.href='/estagios/{{$estagio->id}}'"><span class="glyphicon glyphicon-edit"></span> Editar</button>
                        <button class="btn btn-danger" onclick="excluir({{$estagio->id}}, 'estagios')"><span class="glyphicon glyphicon-remove"></span> Excluir</button>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
