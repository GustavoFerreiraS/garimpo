@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css') }}" />
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js') }}"> </script>
<script type="text/javascript" src='{{ url('/richtexteditor/plugins/all_plugins.js') }}'></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Criar Anúncio') }}</div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="{{ route('anuncio') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="categoria_id">Escolha uma categoria:</label>
                        <select name="categoria_id" class="form-control" id="categoria_id">
                            @foreach ($categorias as $value)
                                <option value="{{ $value->id }}">{{ $value->nome }}</option>
                            @endforeach
                        </select>

                        <label for="imagem">Imagem</label>
                        <input type="file" name="imagem" class="form-control">

                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Digite o título do anúncio">

                        <label for="conteudo">Conteúdo</label>
                        <textarea id="inp_editor1" name="conteudo" class="form-control" rows="4"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

                <script>
                    var editor1 = new RichTextEditor("#inp_editor1");
                </script>

            </div>
        </div>
    </div>
</div>

@endsection
