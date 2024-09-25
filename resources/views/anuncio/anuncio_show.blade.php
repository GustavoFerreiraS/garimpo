@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <p><strong>Titulo:</strong> {{ $anuncio->nome }}</p>
                <p><strong>Conteúdo:</strong> {{ $anuncio->conteudo }}</p>
                <p><strong>Autor:</strong> {{-- $anuncio->nome --}}</p>
                <p><strong>Criação</strong> {{ $anuncio->created_at }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

