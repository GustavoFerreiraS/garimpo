@extends('layouts.app')

@section('content')

<article class="post">



    <div class="container-fluid px-0 mt-5">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Primeira imagem -->
                <div class="carousel-item active">
                    <img src="assets/imagens/Banner/Banner1.jpg" class="d-block w-100 img-fluid" alt="Primeira imagem">
                </div>

                <!-- Segunda imagem -->
                <div class="carousel-item">
                    <img src="assets/imagens/Banner/Banner2.jpg" class="d-block w-100 img-fluid" alt="Segunda imagem">
                </div>

                <!-- Terceira imagem -->
                <div class="carousel-item">
                    <img src="assets/imagens/Banner/Banner3.jpg" class="d-block w-100 img-fluid" alt="Terceira imagem">
                </div>
            </div>

            <!-- Controle anterior -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>

            <!-- Controle próximo -->
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>



<!--Categorias-->
<div class="row row-cols-1 row-cols-md-7 g-4">

    <div class="col-lg-2">
        <a class="hover-card" aria-current="page" href="{{ url('/feed/categoria/1') }}">
            <img src="assets/imagens/7.png" class="bd-placeholder-img rounded-circle" width="80" height="80" alt="Celular">
        </a>
    </div>

    <div class="col-lg-2">
        <a class="hover-card " aria-current="page" href="{{ url('/feed/categoria/5') }}" >
            <img src="assets/imagens/5.png" class="bd-placeholder-img rounded-circle" width="80" height="80" alt="Câmera">
        </a>
    </div>

    <div class="col-lg-2">
        <a href="{{ url('/feed/categoria/3') }}"  aria-current="page" class="hover-card">
            <img src="assets/imagens/icontv.jpg" class="bd-placeholder-img rounded-circle" width="80" height="80" alt="Televisão">
        </a>
    </div>

    <div class="col-lg-2">
        <a href="{{ url('/feed/categoria/6') }}"  aria-current="page" class="hover-card">
            <img src="assets/imagens/9.png" class="bd-placeholder-img rounded-circle" width="80" height="80" alt="Tênis">
        </a>
    </div>

    <div class="col-lg-2">
        <a href="{{ url('/feed/categoria/7') }}"  aria-current="page" class="hover-card">
            <img src="assets/imagens/6.png" class="bd-placeholder-img rounded-circle" width="80" height="80" alt="Eletrodomésticos">
        </a>
    </div>

    <div class="col-lg-2">
        <a class="hover-card " aria-current="page" href="{{ url('/feed/categoria/2') }}">
            <img src="assets/imagens/8.png" class="bd-placeholder-img rounded-circle" width="80" height="80" alt="Roupa">
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




</article>

@endsection


