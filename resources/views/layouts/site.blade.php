<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1e2664">
    <meta name="description" content="{{ $description ?? 'Conheça as viagens e experiências da Exclusiva Viagens, agência em Porto Alegre.' }}">
    <title>{{ $title ?? 'Exclusiva Viagens' }} — Exclusiva Viagens</title>
    <link rel="icon" href="{{ asset('assets/images/cropped-exclusiva-viagens-faviicon-1-32x32.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <a class="skip-link" href="#main-content">Pular para o conteúdo</a>
    <div class="scroll-progress" aria-hidden="true"></div>
    <header class="site-header" id="top">
        <a class="brand" href="{{ route('home') }}" aria-label="Exclusiva Viagens, início">
            <img class="brand-logo" src="{{ asset('images/logo.png') }}" alt="Exclusiva Viagens">
        </a>
        <button class="menu-toggle" type="button" aria-label="Abrir menu" aria-expanded="false" aria-controls="main-nav"><span></span><span></span><span></span></button>
        <nav class="main-nav" id="main-nav" aria-label="Navegação principal">
            <a @class(['active' => request()->routeIs('home')]) href="{{ route('home') }}" @if(request()->routeIs('home')) aria-current="page" @endif>Início</a>
            <a @class(['active' => request()->routeIs('sobre-nos')]) href="{{ route('sobre-nos') }}" @if(request()->routeIs('sobre-nos')) aria-current="page" @endif>Sobre nós</a>
            <a @class(['active' => request()->routeIs('nacionais')]) href="{{ route('nacionais') }}" @if(request()->routeIs('nacionais')) aria-current="page" @endif>Nacionais</a>
            <a @class(['active' => request()->routeIs('internacionais')]) href="{{ route('internacionais') }}" @if(request()->routeIs('internacionais')) aria-current="page" @endif>Internacionais</a>
            <div class="nav-dropdown">
                <a href="{{ route('estudantil-pedagogico') }}" @if(request()->routeIs('estudantil-*', 'formaturas')) aria-current="page" @endif>Estudantil <span aria-hidden="true">⌄</span></a>
                <div class="dropdown-menu">
                    <a href="{{ route('estudantil-pedagogico') }}" @if(request()->routeIs('estudantil-pedagogico')) aria-current="page" @endif>Pedagógico</a>
                    <a href="{{ route('estudantil-lazer') }}" @if(request()->routeIs('estudantil-lazer')) aria-current="page" @endif>Lazer</a>
                    <a href="{{ route('formaturas') }}" @if(request()->routeIs('formaturas')) aria-current="page" @endif>Formaturas</a>
                </div>
            </div>
            <a @class(['active' => request()->routeIs('fotos')]) href="{{ route('fotos') }}" @if(request()->routeIs('fotos')) aria-current="page" @endif>Fotos</a>
            <a class="nav-contact" href="{{ route('contato') }}">Fale com a gente <span aria-hidden="true">↗</span></a>
        </nav>
    </header>
    <main id="main-content">
        @yield('content')
    </main>
    @include('partials.footer')
    <a class="whatsapp-float" href="https://api.whatsapp.com/send?phone=51999239678&amp;text=Ol%C3%A1%2C%20gostaria%20de%20falar%20com%20um%20consultor%20da%20Exclusiva%20Viagens." target="_blank" rel="noopener noreferrer" aria-label="Fale com um consultor pelo WhatsApp"><span class="whatsapp-icon" aria-hidden="true">◉</span><span>Fale com um consultor</span></a>
    <script src="{{ asset('assets/site.js') }}" defer></script>
</body>
</html>
