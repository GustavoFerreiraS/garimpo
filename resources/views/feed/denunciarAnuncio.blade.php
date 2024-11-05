@extends('layouts.app')


@section('content')

<p>{{ $anuncio->titulo }}</p>

@auth

    <form method='POST' action="{{ URL('/feed/denunciarAnuncio') }}">

        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Conteúdo</label><br>
            <input type="hidden" name="anuncio_id" value="{{ $anuncio->id }}">
            <textarea id="w3review" class="form-control" name="conteudo" rows="4" cols="50"></textarea>
        </div>

        <input type="submit" value="Enviar">
    </form>

@endauth



@endsection
