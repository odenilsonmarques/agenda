<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styleHeader.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styleBody.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styleFooter.css')}}">
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
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           Olá, {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-men-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Sair') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
              
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