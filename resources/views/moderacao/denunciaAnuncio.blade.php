@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>


                @if(session('mensagem'))
                <br>
                    <div class="alert alert-success">
                        {{ session('mensagem') }}
                </div>
                @endif


                <table>
                    <tr>
                    <th>ID</th>
                    <th>Anuncio - Título</th>
                    <th>Anuncio -  Autor</th>
                    <th>Denunciante</th>
                    <th>Conteudo da denúncia</th>
                    <th>Status</th>
                    <th class='text-center'>Ações</th>
                    </tr>

                @foreach($denunciaAnuncio as $value)
                    <tr>
                    <td>{{  $value->id }}</td>
                    <td>{{  $value->anuncio->titulo }}</td>
                    <td>{{  $value->anuncio->autor->name }}</td>
                    <td>{{  $value->denunciante->name }}</td>
                    <td>{{  $value->conteudo }}</td>
                    <td>{{ $value->status }}</td>
                    <td class='d-flex justify-content-around'>
                        <a href="{{ url('/ModeracaoDenunciaAnuncioAceito/' . $value->id) }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ACEITO</a>
                        <a href="{{ url('/ModeracaoDenunciaAnuncioNegado/' . $value->id) }}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">NEGADO</a>




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

