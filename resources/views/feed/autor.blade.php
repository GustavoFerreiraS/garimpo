
@extends('layouts.app')

@section('content')

<article class="post">

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-3">
            @foreach ($autores as $value)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body  flex-grow-1">
                            <h5 class="card-title" href="{{ url('/feed/autor/' .  $value->id) }}">{{ $value->name }} </a></strong>  </p><h5>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary w-100" href="{{ url('/feed/autor/' .  $value->id) }}">Ver perfil</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</article>
@endsection
