@extends('layouts.app')

@section('content')

<article class="post">


<!--Corrosel-->
    <div class="container-a">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="assets/imagens/Primeira.png" class="d-block w-100" alt="Primeira imagem">
                </div>

            <!-- Segundo item -->
            <div class="carousel-item">
            <img src="assets/imagens/Segunda.png" class="d-block w-100" alt="Segunda imagem">
            </div>

            <!-- Terceiro item -->
            <div class="carousel-item">
            <img src="assets/imagens/Terceira.png" class="d-block w-100" alt="Terceira imagem">
            </div>
        </div>

        <!-- Controle anterior -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <!-- Controle próximo -->
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
<!--fim Corrosel-->

<!--Categorias-->
<div class="row row-cols-1 row-cols-md-7 g-4">

    <div class="col-lg-2">
        <a href="https://www.nike.com.br/?msclkid=b33bd7219b6216380189b01bb1470a99" class="hover-card">
            <img src="assets/imagens/7.png" class="bd-placeholder-img rounded-circle" width="80" height="80" alt="Nike">
        </a>
    </div>

    <div class="col-lg-2">
        <a href="https://www.nike.com.br/?msclkid=b33bd7219b6216380189b01bb1470a99" class="hover-card">
            <img src="assets/imagens/5.png" class="bd-placeholder-img rounded-circle" width="80" height="80" alt="Nike">
        </a>
    </div>

    <div class="col-lg-2">
        <a href="https://www.nike.com.br/?msclkid=b33bd7219b6216380189b01bb1470a99" class="hover-card">
            <img src="assets/imagens/4.png" class="bd-placeholder-img rounded-circle" width="80" height="80" alt="Nike">
        </a>
    </div>

    <div class="col-lg-2">
        <a href="https://www.nike.com.br/?msclkid=b33bd7219b6216380189b01bb1470a99" class="hover-card">
            <img src="assets/imagens/9.png" class="bd-placeholder-img rounded-circle" width="80" height="80" alt="Nike">
        </a>
    </div>

    <div class="col-lg-2">
        <a href="https://www.nike.com.br/?msclkid=b33bd7219b6216380189b01bb1470a99" class="hover-card">
            <img src="assets/imagens/6.png" class="bd-placeholder-img rounded-circle" width="80" height="80" alt="Nike">
        </a>
    </div>

    <div class="col-lg-2">
        <a href="https://www.nike.com.br/?msclkid=b33bd7219b6216380189b01bb1470a99" class="hover-card">
            <img src="assets/imagens/8.png" class="bd-placeholder-img rounded-circle" width="80" height="80" alt="Nike">
        </a>
    </div>
</div>
<!--fim Categorias-->

<!--Produtos mais procurados-->
<div class="row row-cols-1 row-cols-md-6 g-4">
    <div class="produtosMaisProcurados">
        <h3>Produtos mais procurados</h3>
    </div>


    <a href="" class="card-link">
        <div class="col">
            <div class="card h-100">
                <img src="assets/imagens/anuncios/tvLG50/tvLG501.jpg" class="card-img-top" alt="..."width="80">
                <div class="card-body">
                    <h5 class="card-title">Camisa do Flamengo - Lifestyle</h5>
                    <p class="card-text">teste</p>
                </div>
            </div>
        </div>
    </a>

    <a href="" class="card-link">
        <div class="col">
            <div class="card h-100">
                <img src="assets/imagens/anuncios/airforcebranco/airforcebranco1.jpg" class="card-img-top" alt="..." width="80">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">teste</p>
                </div>
            </div>
        </div>
    </a>

    <a href="" class="card-link">
        <div class="col">
            <div class="card h-100">
                <img src="assets/imagens/anuncios/calca/calca1.jpg" class="card-img-top" alt="..."width="80">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">teste</p>
                    </div>
            </div>
        </div>
    </a>

    <a href="" class="card-link">
        <div class="col">
            <div class="card h-100">
                <img src="assets/imagens/anuncios/camisabrasil/camisabrasil1.jpg" class="card-img-top" alt="..."width="80">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">teste</p>
                    </div>
            </div>
        </div>
    </a>

    <a href="" class="card-link">
        <div class="col">
            <div class="card h-100">
                <img src="assets/imagens/anuncios/vestidodeflor/vestidodeflor1.jpg" class="card-img-top" alt="..."width="80">
                    <div class="card-body">
                        <h5 class="card-title">Camisa do Flamengo - Lifestyle</h5>
                        <p class="card-text">teste</p>
                    </div>
            </div>
        </div>
    </a>

    <a href="" class="card-link">
        <div class="col">
            <div class="card h-100">
                <img src="assets/imagens/anuncios/iphone13preto/iphone13preto1.jpg" class="card-img-top" alt="..."width="80">
                    <div class="card-body">
                        <h5 class="card-title">Camisa do Flamengo - Lifestyle</h5>
                        <p class="card-text">teste</p>
                    </div>
            </div>
        </div>
    </a>
</div>
<!--fim Produtos mais procurados-->

<!--Vendedores da seamana-->
<div class="container my-5">

    <!-- Cards de Vendedores -->
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="vendedoresDaSemana">
            <h3>Vendedores da Semana</h3>
        </div>
        @foreach ( $anuncios as $value )
        <div class="col">
            <div class="card h-100">
                <img src="assets/imagens/vendedora.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><span class="name">{{ $value->autor->name }}</span></h5>
                    <p class="card-text">Há 5 anos vendendo no Garimpo.com</p>
                    <h5 class="text-muted">"Ótimo site, de muita confiança!!"</h5>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-secondary w-100">Ver Perfil</button>
                </div>
            </div>
        </div>
        @endforeach

    </div>


</div>
<!--fim Vendedores da seamana-->


</article>

@endsection

















<!-- <article class="post">

    <header>



        <div class="title">
            <h2><a href="#">{{ $value->titulo }}</a></h2>
            <p>Lorem ipsum dolor amet nullam consequat etiam feugiatavafasdfaf</p>
        </div>

        <div class="meta">
            <time class="published" datetime="2015-11-01">{{ $value->created_at }}</time>
            <a href="#" class="author"><span class="name">{{ $value->autor->name }}</span><img src="images/avatar.jpg" alt="" /></a>
        </div>
    </header>
    <span class="image featured"><img src="data:image/png;base64, {{ $value->imagem }}" alt="Imagem" /></span>
    <p>{!! $value->conteudo !!}</p>




    <footer>
        <ul class="stats">
            <li><a href="{{ url('/feed/categoria/' . $value->id)  }}">{{ $value->categoria->nome }}</a></li>
            <li><a href="{{ url('/feed/curtida/' . $value->id) }}" class="icon solid fa-heart">{{ $value->curtidas->count() }}</a></li>
            <li><a href="{{ url('/feed/anuncio/' . $value->id . '/comentario') }}" class="icon solid fa-comment">{{ $value->comentarios->count() }}</a></li>
            <li><a href="{{ url('/feed/denunciarAnuncio/' . $value->id) }}" class="icon solid fa-comment"> Denunciar anúncio</a></li>
        </ul>
    </footer>






</article>

-->




