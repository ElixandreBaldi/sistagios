@extends('layouts.app')

@section('titulo')
Empresas
@endsection

@section('conteudo')
@foreach($empresas as $empresa)
<div id="{{'modal-' . $empresa->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{$empresa->nome}}</h4>
            </div>
            <div class="modal-body">
                <p>{{$empresa->endereco->rua}}, {{$empresa->endereco->numero}} - {{$empresa->endereco->bairro}}</p>
                <p>{{$empresa->endereco->cidade}} - {{$empresa->endereco->uf}} - {{$empresa->endereco->CEP}}</p>
                <p>{{$empresa->telefone1}} / {{$empresa->telefone2}}</p>
                <p>{{$empresa->email}}</p>
                <p>CNPJ: {{$empresa->cpfcnpj}}</p>
                <br>
                <p>Responsável: {{$empresa->representante}}</p>
                <p>Cadastro efetuado em: {{$empresa->created_at}}</p>
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
            @foreach($empresas as $empresa)
            <tr>
                <td>
                    {{$empresa->nome}}
                </td>
                <td>
                    {{$empresa->endereco->cidade}}
                </td>
                <td>
                    {{$empresa->telefone1}}
                </td>
                <td>
                    <div class="btn-group" role="group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#{{'modal-' . $empresa->id}}"><span class="glyphicon glyphicon-eye-open"></span> Ver mais</button>
                        <button class="btn btn-info" onclick="window.location.href='/empresas/{{$empresa->id}}'"><span class="glyphicon glyphicon-edit"></span> Editar</button>
                        <button class="btn btn-danger" onclick="excluir({{$empresa->id}}, 'empresas')"><span class="glyphicon glyphicon-remove"></span> Excluir</button>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<!-- CONTEUDO TERMINA AQUI -->
@endsection
