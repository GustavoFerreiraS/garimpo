@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Chat sobre o Anúncio: {{ $anuncio->titulo }}</h2>

    <!-- Exibir mensagens -->
    <div class="messages-container mb-4" style="max-height: 400px; overflow-y: scroll;">
        @foreach ($mensagens as $mensagem)
            <div class="message mb-3">
                <!-- Verifica se a mensagem é do usuário logado ou do dono do anúncio -->
                <div class="d-flex {{ $mensagem->de_user_id == auth()->id() ? 'justify-content-end' : 'justify-content-start' }}">
                    <div class="message-box p-3 rounded {{ $mensagem->de_user_id == auth()->id() ? 'bg-primary text-white' : 'bg-light' }}">
                        <strong>{{ $mensagem->deUser->name }}:</strong>
                        <p class="mb-0">{{ $mensagem->conteudo }}</p>
                        <small class="text-muted">{{ $mensagem->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Formulário para envio de mensagens -->
    <form action="{{ route('chat.send', $anuncio->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="conteudo">Digite sua mensagem:</label>
            <textarea id="conteudo" name="conteudo" class="form-control" rows="3" required placeholder="Digite aqui sua mensagem..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-3">Enviar Mensagem</button>
    </form>
</div>
@endsection
