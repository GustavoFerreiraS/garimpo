@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css') }}" />
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js') }}"> </script>
<script type="text/javascript" src='{{ url('/richtexteditor/plugins/all_plugins.js') }}'></script>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <form method='POST' action="{{ URL('/anuncio') }}" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">

                            <label for="cars">Escolha uma categoria:</label>

                            <select name="categoria_id"  class="form-control" id="cars">
                                @foreach ($categorias as $value)
                                    <option value="{{ $value->id }}">{{ $value->nome }}</option>
                                @endforeach
                            </select>


                            <label for="frame">Imagem</label><br>
                            <input type="file" name="imagem" class="form-control">


                            <label for="frame">Título</label><br>
                            <input type="text" name="titulo" class="form-control"  placeholder="Digite o nome da anuncio">

                            <label for="frame">Conteúdo</label><br>

                            <textarea id="inp_editor1" name="conteudo" class="form-control" rows="4" cols="50">
                                </textarea>



                        </div>

                        <input type="submit" value="Enviar">
                    </form>


                    <script>
                        var editor1 = new RichTextEditor("#inp_editor1");
                    </script>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
