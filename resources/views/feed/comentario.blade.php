@extends('layouts.app')


@section('content')

<p>{{ $anuncio->titulo }}</p>

@auth


    <form method='POST' action="{{ URL('/comentario') }}">

        @csrf

        <div class="form-group">
            <label for="frame">Nome:</label><br>
            <input type="hidden" name="anuncio_id" value="{{ $anuncio->id }}">
            <textarea id="w3review" class="form-control" name="conteudo" rows="4" cols="50"></textarea>
        </div>

        <input type="submit" value="Enviar">
    </form>

@endauth

@foreach ($anuncio->comentarios as $value)
    <p>  >>>{{ $value->conteudo }} </p>
    <p>  >>>{{ $value->autor->name }} </p>
    {{-- <p><strong><a href="{{ url('/feed/categoria/' .  $value->id) }}">{{ $value->nome }} </a></strong>  </p>--}}
@endforeach



@endsection
