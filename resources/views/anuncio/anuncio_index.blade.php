@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <a href="{{ url('/anuncio/create') }}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">CRIAR</a>


                @if(session('mensagem'))
                <br>
                    <div class="alert alert-success">
                        {{ session('mensagem') }}
                </div>
                @endif


                <script>
                    function ConfirmDelete() {
                        return confirm('Tem certeza que deseja excluir este registro?');
                    }
                </script>


                <table>
                    <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Categoria</th>
                    <th class="text-center">Título</th>
                    <th class="text-center">Conteúdo</th>
                    </tr>

                @foreach($anuncios as $value)
                    <tr>
                    <td >{{ $value->id }}</td>
                    <td >{{ $value->categoria->nome }}</td>
                    <td >{{ $value->titulo }}</td>

                    <td class='d-flex justify-content-around'>
                        <a href="{{ url('/anuncio/' . $value->id) }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Visualizar</a>

                        <a href="{{ url('/anuncio/' . $value->id) . '/edit' }}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Editar</a>

                            <form method="POST" action='{{ url('/anuncio/'. $value->id )}}' onsubmit ="return ConfirmDelete()">
                                @method('DELETE')
                                @csrf
                                <input type="submit" class="btn btn-danger btn-lg active"  value="Excluir">
                            </form>

                        </td>
                    </tr>
                @endforeach



                </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

