<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#092c3a">
    <meta name="description" content="Viagens nacionais, internacionais, estudantis e experiências feitas para você. Há mais de 20 anos criando histórias com a Exclusiva Viagens, em Porto Alegre.">
    <title>Exclusiva Viagens — O mundo no seu tempo</title>
    <link rel="icon" href="{{ asset('assets/images/cropped-exclusiva-viagens-faviicon-1-32x32.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <div class="scroll-progress" aria-hidden="true"></div>
    <header class="site-header" id="top">
        <a class="brand" href="{{ route('home') }}" aria-label="Exclusiva Viagens, início">
            <span class="brand-mark"><span></span><span></span><span></span></span>
            <span class="brand-copy"><strong>exclusiva</strong><small>VIAGENS · PORTO ALEGRE</small></span>
        </a>
        <button class="menu-toggle" type="button" aria-label="Abrir menu" aria-expanded="false" aria-controls="main-nav"><span></span><span></span></button>
        <nav class="main-nav" id="main-nav" aria-label="Navegação principal">
            <a class="active" href="{{ route('home') }}">Início</a>
            <a href="{{ route('sobre-nos') }}">Sobre nós</a>
            <a href="{{ route('nacionais') }}">Nacionais</a>
            <a href="{{ route('internacionais') }}">Internacionais</a>
            <div class="nav-dropdown"><a href="{{ route('estudantil-pedagogico') }}">Estudantil <span>⌄</span></a><div class="dropdown-menu"><a href="{{ route('estudantil-pedagogico') }}">Pedagógico</a><a href="{{ route('estudantil-lazer') }}">Lazer</a><a href="{{ route('formaturas') }}">Formaturas</a></div></div>
            <a href="{{ route('fotos') }}">Fotos</a>
            <a class="nav-contact" href="{{ route('contato') }}">Fale com a gente <span>↗</span></a>
        </nav>
    </header>

    <main>
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-image hero-image-main" data-parallax="0.12"><img src="{{ asset('assets/images/water-bungalows-and-wooden-jetty-on-maldives-1-e1608537138634.jpg') }}" alt="Bangalôs sobre o mar nas Maldivas"></div>
            <div class="hero-image hero-image-side" data-parallax="0.2"><img src="{{ asset('assets/images/BARILOCHE-1-scaled-1.jpg') }}" alt="Paisagem montanhosa de Bariloche"></div>
            <div class="hero-shade"></div>
            <div class="hero-grain" aria-hidden="true"></div>
            <div class="hero-content" data-reveal>
                <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>Há mais de 20 anos, perto de você</p>
                <h1 id="hero-title">O mundo<br>no seu <em>tempo.</em></h1>
                <p class="hero-description">Viagens que começam com um desejo e viram histórias para a vida toda. A sua próxima começa aqui.</p>
                <div class="hero-actions"><a class="button button-light" href="{{ route('internacionais') }}">Encontre sua viagem <span>↗</span></a><a class="text-link text-link-light" href="{{ route('sobre-nos') }}">Conheça a Exclusiva <span>→</span></a></div>
            </div>
            <div class="hero-note"><span class="note-dot"></span>Seu próximo destino está mais perto</div>
            <a class="hero-scroll" href="#destinos"><span class="scroll-line"></span>DESLIZE PARA EXPLORAR</a>
            <div class="hero-index"><strong>01</strong><span>/</span>05</div>
        </section>

        <section class="intro section-wrap" data-reveal>
            <div class="intro-label"><span class="eyebrow-line"></span><span>VIAJAR É SE SENTIR VIVO</span></div>
            <div class="intro-copy"><h2>Mais do que destinos.<br><em>Experiências com significado.</em></h2><p>Somos uma agência de viagens em Porto Alegre que acredita que cada viagem tem uma história para contar. Cuidamos de cada detalhe para você viver a sua.</p><a class="text-link" href="{{ route('sobre-nos') }}">Nossa história <span>→</span></a></div>
            <div class="intro-seal" aria-label="20 anos de experiências"><span>DESDE</span><strong>20</strong><span>ANOS<br>VIAJANDO</span><i>✳</i></div>
        </section>

        <section class="destinations section-wrap" id="destinos">
            <div class="section-heading" data-reveal><div><p class="eyebrow"><span class="eyebrow-line"></span>ESCOLHAS QUE INSPIRAM</p><h2>Qual lugar<br>chama por <em>você?</em></h2></div><a class="text-link" href="{{ route('nacionais') }}">Ver todos os destinos <span>→</span></a></div>
            <div class="destination-grid">
                <a class="destination-card destination-large tilt-card" href="{{ route('internacionais') }}" data-tilt data-reveal><img src="{{ asset('assets/images/costa-neoriviera-ta-listings.jpg') }}" alt="Navio Costa Neoriviera" loading="lazy"><span class="card-shade"></span><span class="destination-meta"><small>MAR &amp; HORIZONTE</small><strong>Costa Neoriviera</strong><span class="card-link">↗</span></span></a>
                <a class="destination-card tilt-card" href="{{ route('nacionais') }}" data-tilt data-reveal><img src="{{ asset('assets/images/aparecida-do-norte.jpg') }}" alt="Santuário de Aparecida do Norte" loading="lazy"><span class="card-shade"></span><span class="destination-meta"><small>FÉ &amp; CULTURA</small><strong>Aparecida do Norte</strong><span class="card-link">↗</span></span></a>
                <a class="destination-card tilt-card" href="{{ route('nacionais') }}" data-tilt data-reveal><img src="{{ asset('assets/images/mineral-tour-1.jpg') }}" alt="Passeio pelo Mineral Tour" loading="lazy"><span class="card-shade"></span><span class="destination-meta"><small>AVENTURA EM FAMÍLIA</small><strong>Mineral Tour</strong><span class="card-link">↗</span></span></a>
                <a class="destination-card tilt-card" href="{{ route('internacionais') }}" data-tilt data-reveal><img src="{{ asset('assets/images/circuito-andino.jpg') }}" alt="Paisagem dos Lagos Andinos" loading="lazy"><span class="card-shade"></span><span class="destination-meta"><small>NATUREZA SEM LIMITES</small><strong>Circuito Andino</strong><span class="card-link">↗</span></span></a>
                <a class="destination-card destination-wide tilt-card" href="{{ route('internacionais') }}" data-tilt data-reveal><img src="{{ asset('assets/images/montevideu.jpg') }}" alt="Montevidéu, Uruguai" loading="lazy"><span class="card-shade"></span><span class="destination-meta"><small>CHARME URUGUAIO</small><strong>Montevidéu</strong><span class="card-link">↗</span></span></a>
                <a class="destination-card tilt-card" href="{{ route('nacionais') }}" data-tilt data-reveal><img src="{{ asset('assets/images/trem2.jpg') }}" alt="Trem turístico de Curitiba a Morretes" loading="lazy"><span class="card-shade"></span><span class="destination-meta"><small>TRILHOS &amp; MONTANHAS</small><strong>Curitiba – Morretes</strong><span class="card-link">↗</span></span></a>
            </div>
        </section>

        <section class="experience-band" data-parallax-section>
            <div class="experience-image" data-parallax="0.16"><img src="{{ asset('assets/images/floripa.jpg') }}" alt="Praia em Florianópolis" loading="lazy"></div><div class="experience-overlay"></div>
            <div class="experience-content section-wrap" data-reveal><p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>VIAGENS ESTUDANTIS</p><h2>Uma turma.<br><em>Mil histórias.</em></h2><p>Formatura em Florianópolis: dias de celebração, novas amizades e lembranças que ficam muito depois da viagem.</p><a class="button button-light" href="{{ route('formaturas') }}">Descubra o pacote <span>↗</span></a></div>
            <span class="experience-caption">FLORIANÓPOLIS · BRASIL</span>
        </section>

        <section class="services section-wrap" id="servicos">
            <div class="section-heading" data-reveal><div><p class="eyebrow"><span class="eyebrow-line"></span>DO PRIMEIRO PLANO AO EMBARQUE</p><h2>Tudo para ir<br>mais <em>longe.</em></h2></div><p class="heading-aside">Do aéreo ao rodoviário, da viagem de formatura ao intercâmbio — reunimos o que você precisa para viajar do seu jeito.</p></div>
            <div class="service-grid">
                <article class="service-card" data-reveal><div class="service-image"><img src="{{ asset('assets/images/passagens-areas.jpg') }}" alt="Passagens aéreas" loading="lazy"><span>01</span></div><h3>Passagens aéreas</h3><p>Destinos nacionais e internacionais.</p></article>
                <article class="service-card" data-reveal><div class="service-image"><img src="{{ asset('assets/images/Neoriviera-1-1024x680-2.jpg') }}" alt="Cruzeiro marítimo" loading="lazy"><span>02</span></div><h3>Cruzeiros marítimos</h3><p>Uma viagem inesquecível por mar.</p></article>
                <article class="service-card" data-reveal><div class="service-image"><img src="{{ asset('assets/images/hoteis.jpg') }}" alt="Hospedagem em viagem" loading="lazy"><span>03</span></div><h3>Hotéis e veículos</h3><p>Hospedagem e mobilidade no destino.</p></article>
                <article class="service-card" data-reveal><div class="service-image"><img src="{{ asset('assets/images/formaturas.jpg') }}" alt="Viagens de formatura" loading="lazy"><span>04</span></div><h3>Viagens de formatura</h3><p>Para formandos do 9º e 3º anos.</p></article>
                <article class="service-card" data-reveal><div class="service-image"><img src="{{ asset('assets/images/thinkstockphotos-614316294.jpg') }}" alt="Viagem rodoviária" loading="lazy"><span>05</span></div><h3>Viagens rodoviárias</h3><p>Destinos nacionais e internacionais.</p></article>
                <article class="service-card" data-reveal><div class="service-image"><img src="{{ asset('assets/images/intercambio-pacotes.jpg') }}" alt="Intercâmbio cultural" loading="lazy"><span>06</span></div><h3>Intercâmbios</h3><p>Aprenda idiomas e viva novas culturas.</p></article>
                <article class="service-card" data-reveal><div class="service-image"><img src="{{ asset('assets/images/destinos-roda-mundo-intercambio.jpg') }}" alt="Circuito europeu" loading="lazy"><span>07</span></div><h3>Circuito europeu</h3><p>Roteiros organizados com instituições de ensino.</p></article>
                <article class="service-card" data-reveal><div class="service-image"><img src="{{ asset('assets/images/programas-de-intercambio-740x360-1.jpg') }}" alt="Viagem pedagógica" loading="lazy"><span>08</span></div><h3>Viagens pedagógicas</h3><p>Conhecimento e descoberta pelo mundo.</p></article>
            </div>
        </section>

        <section class="promise section-wrap" data-reveal><div class="promise-mark">“</div><div><p class="eyebrow"><span class="eyebrow-line"></span>O JEITO EXCLUSIVA DE VIAJAR</p><h2>Você sonha o destino.<br><em>A gente cuida do caminho.</em></h2></div><div class="promise-bottom"><p>Com mais de 20 anos de experiência, nossa equipe transforma planos em viagens tranquilas, pessoais e cheias de significado.</p><a class="text-link" href="{{ route('sobre-nos') }}">Saiba mais sobre nós <span>→</span></a></div></section>

        <section class="newsletter">
            <div class="newsletter-orbit" aria-hidden="true"></div><div class="newsletter-content section-wrap" data-reveal><div><p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>UMA JANELA PARA O MUNDO</p><h2>Boas viagens<br>começam com <em>boas ideias.</em></h2><p>Receba novidades, destinos e oportunidades para a sua próxima viagem.</p></div><form class="newsletter-form" action="{{ route('contato') }}" method="get"><label for="newsletter-email">Seu melhor e-mail</label><div><input id="newsletter-email" type="email" name="email" placeholder="voce@email.com" required><button type="submit" aria-label="Quero receber novidades">Quero receber <span>↗</span></button></div><small>Conteúdo de viagem, sem excesso. Cancele quando quiser.</small></form></div>
        </section>
    </main>

    <footer class="site-footer"><div class="footer-top section-wrap"><a class="brand brand-footer" href="{{ route('home') }}"><span class="brand-mark"><span></span><span></span><span></span></span><span class="brand-copy"><strong>exclusiva</strong><small>VIAGENS · PORTO ALEGRE</small></span></a><p>Há mais de 20 anos<br>levando você mais longe.</p><a class="footer-contact" href="{{ route('contato') }}">Vamos planejar<br>sua próxima viagem? <span>↗</span></a></div><div class="footer-bottom section-wrap"><span>© {{ date('Y') }} Exclusiva Viagens</span><div><a href="{{ route('nacionais') }}">Destinos nacionais</a><a href="{{ route('internacionais') }}">Destinos internacionais</a><a href="{{ route('contato') }}">Contato</a></div><a class="back-top" href="#top">Voltar ao topo ↑</a></div></footer>
    <a class="whatsapp-float" href="https://api.whatsapp.com/send?phone=51999239678&amp;text=Ol%C3%A1%2C%20gostaria%20de%20falar%20com%20um%20consultor%20da%20Exclusiva%20Viagens." target="_blank" rel="noopener noreferrer" aria-label="Fale com um consultor pelo WhatsApp"><span class="whatsapp-icon">◉</span><span>Fale com um consultor</span></a>
    <script src="{{ asset('assets/home.js') }}" defer></script>
</body>
</html>
