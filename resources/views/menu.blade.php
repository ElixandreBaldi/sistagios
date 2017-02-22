@extends('layouts.app')

@section('titulo')
Menu
@endsection

@section('conteudo')
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
            <a class="thumbnail" onclick="alert('Em breve!');">
                <img src="img/relatorio.png" alt="Relatórios">
                <h3>Relatórios</h3>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="estagios" class="thumbnail">
                <img src="img/vaga.png" alt="Estágios">
                <h3>Estágios</h3>
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
<!-- CONTEUDO TERMINA AQUI -->
@endsection


@section('footer')
    • <a href="usuarios/criar">Criar Usuário</a>
@endsection
