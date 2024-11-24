@extends('layouts.app')

@section('title', 'Recuperação de Senha')

@section('content')
<style>
    .user_card {
        height: 580px;
        width: 400px;
        background:#e6dfe8;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 15px;
        margin: 15px;
        border-radius: 50px;

    }
    h4 {
        font-size: 18px;
        font-family: 'Lucida Sans', sans-serif;
        padding: 10px;
        text-align: left;
    }

    p {
        padding: 15px;
        font-size: 15px;
        font-family: 'Lucida Sans', sans-serif;
        text-align: center;
    }



</style>

<div class="container">
    <h2>Crie sua conta</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="nome">Nome Completo</label>
        <input class="input-field" type="text" id="nome" name="nome" required>

        <label for="email">Celular</label>
        <input class="input-field" type="tel" id="telefone" name="telefone" required placeholder="(21) 99999-9999">

       <!-- <label for="foto">Foto de Perfil</label>
        <input class="input-field" type="file" id="foto" name="foto" accept="image/*" onchange="previewImage(event)">-->
        <label for="nome">E-mail</label>
        <input class="input-field" type="email" id="email" name="email" required placeholder="jojogatinha@gmail.com">

        <label for="nome">Senha</label>
        <input class="input-field" type="password" id="nome" name="nome" required placeholder="Senha">

        <label for="nome">Confimar Senha</label>
        <input class="input-field" type="password" id="nome" name="nome" required placeholder="Confirmar senha">

        <div class="img-preview" id="imgPreview" style="text-align: center;">
          <button class="submit-btn" type="submit"style="border-radius: 15px; width: 200px;">Criar conta</button>
        </div>

    </form>



@endsection
