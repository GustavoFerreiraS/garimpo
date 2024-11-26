@extends('layouts.app')

@section('title', 'Contato')

@section('content')
    <div class="container my-5">
        <h2 class="text-center">Entre em Contato Conosco</h2>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
            </div>
            <button type="submit" style="text-align: center;" class="btn btn-secondary">Enviar</button>
        </form>
    </div>
@endsection
