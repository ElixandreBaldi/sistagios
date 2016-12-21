@extends('layouts.app')

@section('content')
<html>
<head>
    <title>SiStagios - Sistema Gerenciador de Estágios</title>
</head>
<!---->
<body>
    <!-- CONTEUDO COMEÇA AQUI -->
    <div class="container-fluid">
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
                    <form action="menu.html" class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Usuário">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Senha">
                        </div>
                        <button type="submit" class="btn btn-default">Entrar</button>
                    </form>
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
                            <tr>
                                <td>
                                    Administração
                                </td>
                                <td>
                                    Coopavel
                                </td>
                                <td>
                                    Secretária
                                </td>
                                <td>
                                    Voluntário
                                </td>
                                <td>
                                    Mão de Obra Muito Escrava
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Informática
                                </td>
                                <td>
                                    Seta Digital
                                </td>
                                <td>
                                    Suporte
                                </td>
                                <td>
                                    R$364,00
                                </td>
                                <td>
                                    Mão de Obra Escrava
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Meio Ambiente
                                </td>
                                <td>
                                    Secretaria de Meio-Ambiente de Cascavel
                                </td>
                                <td>
                                    Análise de folhas
                                </td>
                                <td>
                                    R$550,00
                                </td>
                                <td>
                                    Mão de Obra Semi-escrava
                                </td>
                            </tr>
                        </tbody>
                    </table>                
                </div>
            </div>
        </div>
        <!-- TABELA DE VAGAS TERMINA AQUI -->
    </div>
    <!-- CONTEUDO TERMINA AQUI -->
</body>
</html>
@endsection
