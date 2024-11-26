@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Sobre o Garimpo.com</h2>

    <p>Bem-vindo à página sobre o Garimpo.com. Aqui você encontrará mais informações sobre nosso serviço.</p>

    <p><strong>Missão:</strong> Facilitar a conexão entre compradores e vendedores locais, oferecendo uma plataforma segura e eficiente para a troca de produtos.</p>

    <p><strong>Visão:</strong> Ser a principal plataforma de anúncios locais, oferecendo aos nossos usuários uma experiência intuitiva e confiável.</p>

    <p><strong>Valores:</strong> Compromisso com a transparência, segurança e um excelente atendimento ao cliente.</p>

    <p>Se tiver alguma dúvida ou sugestão, entre em contato conosco!</p>

    <div class style="text-align: center; margin: 15px;">
        <a class="btn btn-secondary ms-2" href="{{ url('/') }}">Explore Nossa Loja</a>
    </div>
</div>
@endsection

