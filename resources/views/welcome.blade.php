@extends('layouts.app')


@section('content')



<!-- Carrossel -->



<div class="container">
    <div class="row">
        <div>

            <!-- Portfolio -->
            <section>
                @foreach ($anuncios as $value)
                <div class="row">

                    <div>
                        <section class="box">
                           
                            <a href="#" class="image featured"><img src="data:image/png;base64, {{ $value->imagem }}" alt="Imagem" /><</a>
                            <header>
                                <h3>{{ $value->titulo }}</h3>
                            </header>
                            <p>{!! $value->conteudo !!}</p>
                            <footer>
                                <ul class="actions">
                                    <li><a href="#" class="button alt">Find out more</a></li>
                                </ul>
                            </footer>
                             @endforeach
                         
                        </section>
                    </div>

       
         

        </div>
    </div>
</div>



@endsection