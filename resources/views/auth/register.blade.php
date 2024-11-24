@extends('layouts.app')

@section('title', 'register')

@section('content')

    <style>
        /* Seu estilo personalizado */


        .containera {
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #e6dfe8;
            border-radius: 50px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .containera h2 {
            margin: 5px;
            padding: 0;
            text-align: center;
        }
        .containera p{
            text-align: center;
            margin-bottom: 20px;x-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }



        .form-control {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #236edf;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #246edb;
        }

        .img-preview {
            margin-top: 10px;
            text-align: center;
        }

        .img-preview img {
            max-width: 150px;
            max-height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>



    <div class="containera">


                    <h2>Crie sua conta</h2>


                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Nome Completo -->
                            <div class="form-group">
                                <label for="name">Nome Completo</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- E-mail -->
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Senha -->
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Confirmar Senha -->
                            <div class="form-group">
                                <label for="password_confirmation">Confirmar Senha</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="img-preview">
                                <button type="submit" class="btn btn-primary btn-block">Criar conta</button>
                            </div>
                        </form>


    </div>
@endsection

@section('styles')
@endsection
