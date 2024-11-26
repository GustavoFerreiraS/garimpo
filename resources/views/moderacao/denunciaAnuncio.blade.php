@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Moderação de Denúncias</h3>
                </div>

                <div class="card-body">
                    @if(session('mensagem'))
                        <div class="alert alert-success">
                            {{ session('mensagem') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Anúncio - Título</th>
                                <th>Anúncio - Autor</th>
                                <th>Denunciante</th>
                                <th>Conteúdo da Denúncia</th>
                                <th>Status</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($denunciaAnuncio as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->anuncio->titulo ?? 'Título não disponível' }}</td>
                                    <td>{{ $value->anuncio->autor->name ?? 'Autor não disponível' }}</td>
                                    <td>{{ $value->denunciante->name ?? 'Denunciante não disponível' }}</td>
                                    <td>{{ $value->conteudo }}</td>
                                    <td>{{ ucfirst(strtolower($value->status)) }}</td>
                                    <td class="d-flex justify-content-around">
                                        <a href="{{ url('/ModeracaoDenunciaAnuncioAceito/' . $value->id) }}" class="btn btn-success">Aceitar</a>
                                        <a href="{{ url('/ModeracaoDenunciaAnuncioNegado/' . $value->id) }}" class="btn btn-danger">Negar</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Nenhuma denúncia encontrada.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $denunciaAnuncio->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
