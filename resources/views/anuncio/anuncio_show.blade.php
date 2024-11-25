@extends('layouts.app')

@section('content')




<div class="conteiner">
    <div class="row">

        <!-- Imagem do Anúncio -->
        <div class="col-md-4">
            <img src="data:image/png;base64, {{ $anuncio->imagem }}" alt="Imagem do Produto" class="product-image">
        </div>
        <!-- Card de Perfil do Vendedor -->

        <!-- Detalhes do Anúncio -->

        <div class="col-md-4">
            <div class="product-card">
                <h2 class="text-xl font-bold mb-2">{{ $anuncio->titulo }}</h2>

                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="" class="btn btn-secondary w-100">Chat</a>
                    </li>
                    <li class="mb-2">
                        <a href="" class="btn btn-secondary w-100">Favoritar</a>
                    </li>
                    <li>
                        <a href="" class="btn btn-danger w-100">Denunciar</a>
                    </li>
                </ul>
            </div>
        </div>



<!-- Card de Perfil do Vendedor -->
        <a href="" class="col-md-4 card h-100">
            <div class="seller-profile text-center">
                <h3 class="font-weight-bold">{{ $anuncio->autor->name }}</h3>
                <p class="text-muted">Ativa a 2 anos no Garimpo.com</p>
                <p class="text-muted">+150 vendas</p>
            </div>
        </a>
    </div>

    <!-- Card de Perfil do Vendedor -->

    <!-- Descrição do Produto -->
    <div class="product-description">

        <p><strong>Conteúdo:</strong> {!! $anuncio->conteudo !!}</p>
        <p><strong>Criação</strong> {{ $anuncio->created_at }}</p>
    </div>


    <!-- Produtos Similares e Vendedor -->
    <div>
        <h5 class="text-xl font-bold mb-4">Produtos Similares</h5>
        <div class="row row-cols-1 row-cols-md-2 g-3">

            <!-- Card Produto Similar 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/imagens/vendedora.jpg" class="card-img-top" alt="Imagem do Produto">
                    <div class="card-body">
                        <h5 class="card-title">Mariana Lois</h5>
                        <p class="card-text">Há 5 anos vendendo no Garimpo.com</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary w-100">Tenho Interesse</button>
                    </div>
                </div>
            </div>

            <!-- Card Produto Similar 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/imagens/vendedora.jpg" class="card-img-top" alt="Imagem do Produto">
                    <div class="card-body">
                        <h5 class="card-title">Mariana Lois</h5>
                        <p class="card-text">Há 5 anos vendendo no Garimpo.com</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary w-100">Tenho Interesse</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


@endsection

@section('styles')
    <style>
        .product-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-card {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-description {
            margin-top: 30px;
        }

        .product-description p {
            font-size: 16px;
            color: #333;
        }

        .btn-secondary {
            background-color: #236edf;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #1d5bb5;
        }

        .seller-profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .seller-profile h3 {
            font-weight: bold;
            margin-top: 10px;
        }

        .seller-profile p {
            color: #6c757d;
        }
    </style>
@endsection
