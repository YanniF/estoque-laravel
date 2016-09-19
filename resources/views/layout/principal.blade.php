<html>
<head>
	<title>Controle de Estoque</title>
	<link rel="stylesheet"  href="{{ asset('css/app.css') }}"><!-- para poder pegar o css mesmo em subpastas -->
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
	<div class="container">
		
		<nav class="navbar navbar-default">
        	<div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Registre-se</a></li>
                    @else
                    	<li><a href="{{ action('ProdutoController@novo') }}"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
						<li><a href="{{ action('ProdutoController@lista') }}"><span class="glyphicon glyphicon-th-list"></span> Listagem</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
   		</nav>
	</div>	
	@yield('conteudo')
		
	<div class="container">		
		<footer class="footer">
			<p>&copy; Livro de Laravel da Casa do Código</p>
		</footer>
	</div>
	<script src="/js/app.js"></script>
</body>
</html>