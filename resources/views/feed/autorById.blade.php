@extends('layouts.app')

@section('content')


<article class="post">

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-3">
            @foreach ($anuncios as $value)
                <div class="col">
                    <div class="card h-100">
                        <img src="data:image/png;base64, {{ $value->imagem }}" class="card-img-top" alt="">
                        <div class="card-body  flex-grow-1">
                            <h5 class="card-title">{{ $value->titulo }}</h5>
                            <h6 class="card-title">{{ $value->autor->name }}</h6>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary w-100" href="{{ route('anuncio.show', $value->id) }}">Tenho interesse</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!--
        <time class="published" datetime="2015-11-01">{{ $value->created_at }}</time>
        <footer>
        <ul class="stats">
            <li><a href="{{ url('/feed/categoria/' . $value->id)  }}">{{ $value->categoria->name }}</a></li>
            <li><a href="#" class="icon solid fa-heart">28</a></li>
            <li><a href="#" class="icon solid fa-comment">128</a></li>
        </ul>
    </footer>
-->



</article>





@endsection
