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
                        @auth
                                <a href="{{ route('chat.show', $anuncio->id) }}" class="btn btn-secondary w-100">Chat</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-secondary w-100">Login para Chat</a>
                        @endauth
                    </li>
                    <li class="mb-2">
                        @auth
                            @php
                                $curtido = \App\Models\Curtida::where('anuncio_id', $anuncio->id)
                                            ->where('user_id', auth()->id())
                                            ->exists();
                            @endphp

                            @if($curtido)
                                <a href="{{ route('curtida', $anuncio->id) }}" class="btn btn-dark w-100">Descurtir</a>
                            @else
                                <a href="{{ route('curtida', $anuncio->id) }}" class="btn btn-primary w-100">Curtir</a>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary w-100">Curtir</a>
                        @endauth
                    </li>

                    <li>
                        <a href="{{ url('/feed/denunciarAnuncio/' . $anuncio->id) }}" class="btn btn-danger w-100">Denunciar</a>
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
