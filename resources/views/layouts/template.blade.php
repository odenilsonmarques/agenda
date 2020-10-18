<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{('assets/css/estyleHeader.css')}}">
    <link rel="stylesheet" href="{{('assets/css/estyleBody.css')}}">
    <link rel="stylesheet" href="{{('assets/css/estyleFooter.css')}}">
</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{route('agendaHome')}}" class="navbar-brand">Agenda</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavBar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Usuariologado</a></li>
                    </ul>
                </div>
            </div>
        </nav><br/><br/>
    </header>
    <article>
        <div class="container contentBody">
            @yield('content')
        </div>
    </article>
    <footer>
        <div class="container contentFooter">
            <div class="row">
                <div class="col-lg-12 text-center"><p>Desenvolvido by odweb.com<p></div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="{{('assets/js/jquery-3.1.1.min.js')}}"></script>
    <script type="text/javascript" src="{{('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{('assets/js/jquery.mask.min.js')}}"></script>
    <script type="text/javascript" src="{{'assets/js/mascaraTelefone.js'}}"></script>
</body>
</html>