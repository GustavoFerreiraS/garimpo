@extends('layouts.app')

@section('content')

<article class="post">

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-3">
            @foreach ($categorias as $value)
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/imagens/vendedora2.jpg" class="card-img-top" alt="Mariana Lois">
                        <div class="card-body  flex-grow-1">
                            <h5 class="card-title">{{ $value->nome }}</h5>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary w-100" href="{{ url('/feed/categoria/' .  $value->id) }}">Tenho interesse</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</article>
@endsection



