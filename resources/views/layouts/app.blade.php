<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Garimpo.com</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- <link rel="stylesheet" href="{{ url('assets/css/main.css') }}" /> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ url('assets/css/estilo.css') }}"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

	</head>
	<body class="single is-preload">

        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif



<div id="wrapper">
    <header id="header">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container">
                            <!-- Botão de colapso para dispositivos menores -->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Logo e links da navbar -->
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                <a href="{{ url('/') }}" class="navbar-brand">
                                    <img src="{{ url('assets/imagens/Logo2.png') }}" alt="Logo" width="80px">
                                </a>
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{ url('/feed/categoria') }}">Categorias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/feed/autor') }}">Autores</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{ url('') }}">Perfil</a>
                                    </li>

                                <!-- Se o usuário NÃO estiver logado, mostra o link de Login -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="{{ url('/login') }}">Login</a>
                                        </li>
                                    @endguest

                                    <!-- Se o usuário ESTIVER logado, mostra o formulário de Logout -->
                                    @auth
                                        <li class="nav-item">
                                            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-link nav-link">Sair</button>
                                            </form>
                                        </li>
                                    @endauth
                                        </ul>
                                    </div>
                            <!-- Campo de busca e botão de login -->
                            <form class="d-flex me-2" role="search">
                                <input class="form-control me-2" type="search" placeholder="Buscar 'Camisa de time'" aria-label="Search">
                                <button class="btn btn-secondary" type="submit">Busca</button>
                            </form>

                            @auth
                                <a class="btn btn-secondary" href="{{  url('anuncio') }}">Anunciar</a>
                            @endauth

                        <!-- Se não estiver logado, redireciona para a página de login -->
                            @guest
                                <a class="btn btn-secondary" href="{{  url('/login') }}">Anunciar</a>
                            @endguest

                        </div>
                    </nav>
                </header>

            <div id="main">
                    <div class="container">
                        @yield('content')
                    </div>
            </div>

                <!-- Footer -->
					<section id="footer">
                        <footer class="rodape bg-body-tertiary">
                            <div class="container">
                                <div class="row p-5 text-center text-md-start">
                                    <!-- Logo e Descrição -->
                                    <div class="col-md-3 mt-3">
                                        <a class="navbar-brand" href="{{ url('/') }}">
                                            <img src="{{ url('assets/imagens/Logo2.png') }}" alt="Logo" width="100" height="100">
                                        </a>
                                    </div>
                                    <!-- Links -->
                                    <div class="col-md-3 mt-3">
                                        <h3 class="fs-6 ms-3 text-uppercase">categorias</h3>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link " aria-current="page" href="{{ url('/feed/categoria/1') }}">Celular</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " aria-current="page" href="{{ url('/feed/categoria/3') }}">Televisão</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " aria-current="page" href="{{ url('/feed/categoria/2') }}">Roupa</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " aria-current="page" href="{{ url('/feed/categoria/4') }}">Móveis</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " aria-current="page" href="{{ url('/feed/categoria') }}">Mais categorias</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Menu -->
                                    <div class="col-md-3 mt-3">
                                        <h3 class="fs-6 ms-3 text-uppercase">Menu</h3>
                                        <ul class="nav flex-column">
                                            <!-- Se o usuário NÃO estiver logado, mostra o link de Login -->
                                    @guest
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="{{ url('/login') }}">Login</a>
                                    </li>
                                @endguest

                                <!-- Se o usuário ESTIVER logado, mostra o formulário de Logout -->
                                @auth
                                    <li class="nav-item">
                                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-link nav-link">Sair</button>
                                        </form>
                                    </li>
                                @endauth


                                @auth
                                <!-- Direciona para 'Meus Anúncios' -->
                                    <a class="nav-link" href="{{ url('/anuncio') }}">Meus Anúncios</a>
                                @endauth

                                <!-- Verifica se o usuário é um visitante (não está autenticado) -->
                                @guest
                                    <!-- Direciona para a página de login -->
                                    <a class="nav-link" href="{{ url('/login') }}">Anunciar</a>
                                @endguest

                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('favoritos') }}">Meus Favoritos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" aria-current="page" href="{{ route('sobre') }}">Sobre</a>
                                            </li>


                                            <li class="nav-item">
                                                <a class="nav-link " aria-current="page" href="#">Contato</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Redes Sociais -->
                                    <div class="col-md-3 mt-3">
                                        <h3 class="fs-6 ms-3 text-uppercase">Redes Sociais</h3>
                                        <ul class="nav justify-content-center justify-content-md-start">
                                            <!-- Facebook -->
                                            <li class="nav-item">
                                                <a class="nav-link fs-3" href="https://www.facebook.com" target="_blank">
                                                    <i class="bi bi-facebook" style="font-size: 30px; margin-right: 8px;"></i>
                                                </a>
                                            </li>
                                            <!-- X (Antigo Twitter) -->
                                            <li class="nav-item">
                                                <a class="nav-link fs-3" href="https://x.com" target="_blank">
                                                    <i class="bi bi-x" style="font-size: 30px; margin-right: 8px;"></i>
                                                </a>
                                            </li>
                                            <!-- Instagram -->
                                            <li class="nav-item">
                                                <a class="nav-link fs-3" href="https://www.instagram.com" target="_blank">
                                                    <i class="bi bi-instagram" style="font-size: 30px; margin-right: 8px;"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </footer>
					</section>
</div>
		<!-- Scripts -->
			<script src="{{ url('assets/js/jquery.min.js') }}"></script>
			<script src="{{ url('assets/js/browser.min.js') }}"></script>
			<script src="{{ url('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ url('assets/js/util.js') }}"></script>
			<script src="{{ url('assets/js/main.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
