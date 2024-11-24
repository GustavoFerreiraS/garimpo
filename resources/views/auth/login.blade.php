    @extends('layouts.app')

    @section('title', 'Login')

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
    <div class="d-flex justify-content-center">
        <div class="user_card">

            <!-- Formulário de Login -->
            <form method="POST" action="{{ route('login') }}">
                @csrf  <!-- Protege contra CSRF -->
                <h4>Login</h4>

                <div class="input-group mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Usuário" value="{{ old('email') }}" required autofocus>
                </div>

                <h4>Senha</h4>
                <div class="input-group mb-2">
                    <input type="password" name="password" class="form-control" placeholder="***********" required>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <p><a href="{{ route('password.request') }}">Esqueceu a senha?</a></p>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary btn-custom">Entrar</button>
                </div>
            </form>

            <div class="text-center mt-4">
                <hr>
                <p>Deseja criar uma conta?</p>
                <a href="{{ route('register') }}">
                    <button type="button" class="btn btn-primary btn-custom">Criar conta</button>
                </a>
            </div>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        </div>
    </div>
</div>
    </div>
    @endsection
