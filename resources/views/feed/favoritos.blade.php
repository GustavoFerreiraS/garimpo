@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Meus Favoritos</h2>

    @if($curtidas->isEmpty())
        <p>Você ainda não curtiu nenhum anúncio.</p>
    @else
        <div class="row">
            @foreach($curtidas as $curtida)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="data:image/png;base64, {{ $curtida->anuncio->imagem }}" class="card-img-top" alt="Imagem do Produto">
                        <div class="card-body">
                            <h5 class="card-title">{{ $curtida->anuncio->titulo }}</h5>
                            <p class="card-text">{{ Str::limit($curtida->anuncio->conteudo, 100) }}</p>
                            <a href="{{ url('/anuncio/' . $curtida->anuncio->id) }}" class="btn btn-primary">Ver Anúncios</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
