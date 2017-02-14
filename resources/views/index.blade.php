@extends('layouts.home')

@section('conteudo')
<!-- CONTEUDO COMEÇA AQUI -->
<div class="bg">
    <!-- CABEÇALHO COMEÇA AQUI -->
    <div class="row">
        <!-- TITULO COMEÇA AQUI -->
        <div class="col-md-6 titulo">
            <h1 class="master-titulo">SiStagios</h1>
            <h2 class="master-subtitulo">Sistema Gerenciador de Estágios</h2>
        </div>
        <!-- TITULO TERMINA AQUI -->
        <!-- LOGIN COMEÇA AQUI -->
        <div class="col-md-6 login">
            <div class="col-md-offset-1 col-md-10">
                <form class="form-inline" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-default">Entrar</button>
                </form>
                @if ($errors->has('username'))
                    <div class="form-group">
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    </div>
                @endif
                @if ($errors->has('password'))
                    <div class="form-group">
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    </div>
                @endif
            </div>
        </div>
        <!-- LOGIN TERMINA AQUI -->
    </div>
    <!-- CABEÇALHO TERMINA AQUI -->
    <!-- TABELA DE VAGAS COMEÇA AQUI -->
    <div class="row">
        <div class="col-md-12 vagas">
            <div class="col-md-offset-1 col-md-10">
                <table class="table table-hover">
                    <legend>Vagas Disponíveis</legend>
                    <thead class="vagas-title">
                        <td>
                            Curso
                        </td>
                        <td>
                            Empresa
                        </td>
                        <td>
                            Setor
                        </td>
                        <td>
                            Bolsa Auxílio
                        </td>
                        <td>
                            Tipo de Vaga
                        </td>
                    </thead>
                    <tbody>
                        @foreach($vagasAbertas as $vaga)
                        <tr>
                            <td>
                                {{$vaga->curso}}
                            </td>
                            <td>
                                {{$vaga->empresa}}
                            </td>
                            <td>
                                {{$vaga->setor}}
                            </td>
                            <td>
                                {{$vaga->bolsa}}
                            </td>
                            <td>
                                {{$vaga->descricao}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- TABELA DE VAGAS TERMINA AQUI -->
</div>
<!-- CONTEUDO TERMINA AQUI -->
@endsection
