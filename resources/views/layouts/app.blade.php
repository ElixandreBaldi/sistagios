<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
    <title>SiStagios - @yield('titulo')</title>
</head>
<body>
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
        @yield('conteudo')
    </div>
    <div class="footer">
        <p>
            <a href="mailto:luizguilhermefr@gmail.com,victor_pozzan@hotmail.com,elixandre_michael@hotmail.com">Reportar Erro</a>
            @yield('footer')
        </p>
    </div>
</body>
</html>
