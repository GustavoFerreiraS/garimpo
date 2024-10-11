<!DOCTYPE HTML>

<html>
	<head>
		<title>Dopetrope by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ URL('assets/css/main.css')}}"/>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
						<h1><a href="index.html">Dopetrope</a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.html">Home</a></li>
								<li><a href="{{ url('/feed/categoria') }}">Categoria</a></li>
								<li><a href="#">Sobre</a></li>
								<li><a href="#">Mais</a></li>
								<li>
								
							</ul>
						</nav>
						<section id="main">

					@yield('content')
						</section>
			

		<!-- Scripts -->
			<script src="{{ url('assets/js/jquery.min.js')}}"></script>
			<script src="{{ url('assets/js/jquery.dropotron.min.js')}}"></script>
			<script src="{{ url('assets/js/browser.min.js')}}"></script>
			<script src="{{ url('assets/js/breakpoints.min.js')}}"></script>
			<script src="{{ url('assets/js/util.js')}}"></script>
			<script src="{{ url('assets/js/main.js')}}"></script>

	</body>
</html>