@extends('layouts.app')

@section('titulo')
Professores
@endsection

@section('conteudo')
    <div id="modal-cadastrar" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Cadastrar Professor</h4>
                </div>
                <form role="form" method="POST" action="/professores/criar">
                    {{ csrf_field() }}
                    <div class="modal-body col-md-12">
                        <div class="form-group col-md-12">
                            <label for="nome">NOME</label>
                            <input type="text" class="form-control" value="{{old('nome')}}" onkeypress="somenteLetras( this )" required="required" id="nome" name="nome">
                            @if ($errors->has('nome'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('nome') }}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="form-group col-md-12">
                            <label for="email">E-MAIL</label>
                            <input type="email" class="form-control" required="required" value="{{old('email')}}" id="email" name="email">
                            @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" >Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row content">
        <button onclick="window.location.href='/cursos'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
        <button data-toggle="modal" data-target="#modal-cadastrar" class="btn btn-primary"><span class="glyphicon glyphicon-asterisk"></span> Cadastrar novo</button>

        <h3 class="titulo_area">Professor</h3>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar...">
            <span class="input-group-btn">
                <button class="btn btn-default form-control" type="button"><span class="glyphicon glyphicon-search"></span></button>
            </span>
        </div>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">Últimos Professores Cadastrados</div>
            <table class="table">
                <tr>
                    <th>
                        NOME
                    </th>
                    <th>
                        EMAIL
                    </th>
                    <th>
                        AÇÕES
                    </th>
                </tr>
                @foreach ($professores as $professor)
                <tr>
                    <td>{{$professor -> nome}}</td>
                    <td>{{$professor -> email}}</td>
                    <td>
                        <div class='btn-group' role='group'>
                            <button class='btn btn-info' onclick="window.location.href='professores/{{$professor -> id}}'"><span class='glyphicon glyphicon-edit'></span> Editar</button>
                            <button class='btn btn-danger' onclick='excluir({{$professor->id}}, "professores")'><span class='glyphicon glyphicon-remove'></span> Excluir</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <script>
        /*$( document ).ready(function() {
            $("#modal-cadastrar").modal();
        });*/
    </script>

<!-- CONTEUDO TERMINA AQUI -->
@endsection
