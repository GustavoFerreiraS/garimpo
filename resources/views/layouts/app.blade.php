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
	</head>
	<body class="single is-preload">


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
                                <a href="#" class="navbar-brand">
                                    <img src="assets/imagens/Logo2.png" alt="Logo" width="80px">
                                </a>
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{ url('/feed/categoria') }}">Categorias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/feed/autor') }}">Autores</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Campo de busca e botão de login -->
                            <form class="d-flex me-2" role="search">
                                <input class="form-control me-2" type="search" placeholder="Buscar 'Camisa de time'" aria-label="Search">
                                <button class="btn btn-secondary" type="submit">Busca</button>
                            </form>
                            <a button class="btn btn-secondary" href="{{ url('/login') }}">Login</a>
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
                                        <a class="navbar-brand" href="#">
                                            <img src="assets/imagens/Logo.png" alt="Logo" width="100" height="100">
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <!-- Links -->
                                    <div class="col-md-3 mt-3">
                                        <h3 class="fs-6 ms-3 text-uppercase">Links</h3>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link fw-lighter text-black" href="celular.blade.php">Celular</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-lighter text-black" href="#">###</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-lighter text-black" href="#">##</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Menu -->
                                    <div class="col-md-3 mt-3">
                                        <h3 class="fs-6 ms-3 text-uppercase">Menu</h3>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link fw-lighter text-black" href="#">##</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-lighter text-black" href="sobre.html">##</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-lighter text-black" href="#">##</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Redes Sociais -->
                                    <div class="col-md-3 mt-3">
                                        <h3 class="fs-6 ms-3 text-uppercase">Redes Sociais</h3>
                                        <ul class="nav justify-content-center justify-content-md-start">
                                            <li class="nav-item">
                                                <a class="nav-link text-primary fs-3" href="#"> <i class="bi bi-facebook"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-info fs-3" href="#"><i class="bi bi-twitter"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-danger fs-3" href="#"><i class="bi bi-instagram"></i></a>
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
