@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mt-4">Denunciar Anúncio</h1>
    <p class="text-muted text-center">Informe o motivo da denúncia para o anúncio abaixo:</p>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $anuncio->titulo }}</h5>
            <p class="card-text">{{ $anuncio->conteudo }}</p>
        </div>
    </div>

    @auth
        <form method="POST" action="{{ url('/feed/denunciarAnuncio') }}">
            @csrf

            <input type="hidden" name="anuncio_id" value="{{ $anuncio->id }}">

            <div class="form-group">
                <label for="conteudo">Motivo da Denúncia</label>
                <textarea id="conteudo" name="conteudo" class="form-control" rows="5" required></textarea>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-danger">Enviar Denúncia</button>
            </div>
        </form>
    @else
        <div class="alert alert-warning mt-4" role="alert">
            Você precisa estar logado para realizar uma denúncia.
        </div>
    @endauth
</div>

@endsection
