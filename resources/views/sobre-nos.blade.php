@extends('layouts.site', ['title' => 'Sobre nós', 'description' => 'Conheça a história, a missão e os valores da Exclusiva Viagens, agência em Porto Alegre.'])

@section('content')
    @include('partials.page-hero', ['title' => 'Tradição & excelência', 'eyebrow' => 'SOBRE NÓS', 'intro' => 'Uma agência feita de cuidado, experiência e vontade de levar você mais longe.', 'heroImage' => 'Asset-2-1.png'])
    <section class="page-section section-wrap about-story">
        <div class="about-image"><img src="{{ asset('assets/images/Asset-2-1.png') }}" alt="Equipe e identidade da Exclusiva Viagens" loading="lazy"></div>
        <div class="page-copy"><p class="eyebrow"><span class="eyebrow-line"></span>QUEM SOMOS</p><h2>Viagens que viram <em>histórias.</em></h2><p>A Exclusiva Viagens é uma agência de turismo de Porto Alegre que transforma planos em experiências. Desde 1994, trabalhamos para entender o que cada viajante procura e cuidar dos detalhes de cada jornada.</p><p>De uma viagem em família a um roteiro de estudos, lazer ou celebração, nossa equipe está pronta para ajudar você a planejar o próximo destino.</p><a class="button" href="{{ route('contato') }}">Fale com a equipe <span aria-hidden="true">↗</span></a></div>
    </section>
    <section class="page-section page-section-tint"><div class="section-wrap"><div class="section-heading"><div><p class="eyebrow"><span class="eyebrow-line"></span>O QUE NOS GUIA</p><h2>Viajar bem começa <em>com confiança.</em></h2></div></div><div class="value-grid">
        <article class="value-card"><img src="{{ asset('assets/images/destination.png') }}" alt="" loading="lazy"><h3>Missão</h3><p>Criar experiências de viagem com atendimento próximo, planejamento cuidadoso e atenção a cada viajante.</p></article>
        <article class="value-card"><img src="{{ asset('assets/images/sunset.png') }}" alt="" loading="lazy"><h3>Visão</h3><p>Ser reconhecida pela qualidade do atendimento e pela confiança construída com clientes e parceiros.</p></article>
        <article class="value-card"><img src="{{ asset('assets/images/sign.png') }}" alt="" loading="lazy"><h3>Valores</h3><p>Transparência, inovação, responsabilidade, segurança, dedicação e alegria em cada viagem.</p></article>
    </div></div></section>
@endsection
