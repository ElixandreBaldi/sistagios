@extends('layouts.app')

@section('titulo')
Menu
@endsection

@section('conteudo')
<!-- CONTEUDO COMEÇA AQUI -->
<div class="container-fluid sys">
    <!-- TITULO COMEÇA AQUI -->
    <div class="row">
        <div class="col-md-12 sys">
            <h1 class="master-titulo">SiStagios</h1>
            <h2 class="master-subtitulo">Sistema Gerenciador de Estágios</h2>
        </div>
    </div>
    <!-- TITULO TERMINA AQUI -->
    <!-- MENU COMEÇA AQUI -->
    <div class="row">
        <br>
        <div class="col-md-4">
            <a href="empresas" class="thumbnail">
                <img src="img/empresa.png" alt="Empresas">
                <h3>Empresas</h3>
            </a>            
        </div>
        <div class="col-md-4">
            <a href="alunos" class="thumbnail">
                <img src="img/aluno.png" alt="Alunos">
                <h3>Alunos</h3>
            </a>
        </div>
        <div class="col-md-4">
            <a href="relatorios" class="thumbnail">
                <img src="img/relatorio.png" alt="Relatórios">
                <h3>Relatórios</h3>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="vagas" class="thumbnail">
                <img src="img/vaga.png" alt="Vagas Abertas">
                <h3>Vagas Abertas</h3>
            </a>            
        </div>
        <div class="col-md-4">
            <a href="cursos" class="thumbnail">
                <img src="img/coordenador.png" alt="Cursos">
                <h3>Cursos</h3>
            </a>
        </div>
        <div class="col-md-4">
            <a href="sair" class="thumbnail">
                <img src="img/sair.png" alt="Sair">
                <h3>Sair</h3>
            </a>
        </div>
    </div>
    
    <!-- MENU TERMINA AQUI -->
    <p><br><br><br><a href="mailto:luizguilhermefr@gmail.com,victor_pozzan@hotmail.com,elixandre_michael@hotmail.com">Reportar Erro</a></p>
</div>
<!-- CONTEUDO TERMINA AQUI -->
@endsection
