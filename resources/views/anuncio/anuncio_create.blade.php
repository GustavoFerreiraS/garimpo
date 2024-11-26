@extends('layouts.app')

@section('content')

<style>
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 30px;
        background-color: #e6dfe8;
        font-family: 'Lucida Sans';
    }

   

    .form-group label {
        font-size: 1.1rem;
        font-weight: bold;
        color: #333;
    }

    .form-control {
        border-radius: 10px;
        border: 1px solid #ccc;
        padding: 10px;
        font-size: 1rem;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 10px;
        padding: 12px;
        margin: 20px;
        font-size: 1.1rem;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .alert {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .form-control-file {
        border-radius: 10px;
        padding: 10px;
        border: 1px solid #ccc;
    }

    /* Estilos Responsivos */
    @media (max-width: 768px) {
        .card {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .btn {
            width: 100%;
        }
    }
</style>

<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css') }}" />
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js') }}"> </script>
<script type="text/javascript" src='{{ url('/richtexteditor/plugins/all_plugins.js') }}'></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="{{ url('/anuncio') }}" enctype="multipart/form-data">
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





