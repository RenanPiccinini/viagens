@extends('layouts.site', ['title' => 'Estudantil lazer', 'description' => 'Viagens de lazer para estudantes e grupos, planejadas com apoio da Exclusiva Viagens.'])

@section('content')
    @include('partials.page-hero', ['title' => 'Uma turma. Mil histórias.', 'eyebrow' => 'ESTUDANTIL · LAZER', 'intro' => 'Momentos de convivência, novas descobertas e boas lembranças para compartilhar com a turma.', 'heroImage' => 'floripa.jpg', 'cta' => 'Converse com a equipe'])
    <section class="page-section section-wrap about-story">
        <div class="about-image"><img src="{{ asset('assets/images/floripa.jpg') }}" alt="Praia em Florianópolis" loading="lazy"></div>
        <div class="page-copy"><p class="eyebrow"><span class="eyebrow-line"></span>VIAGEM EM GRUPO</p><h2>Celebrar cada momento <em>lado a lado.</em></h2><p>Uma viagem estudantil de lazer é uma oportunidade para a turma viver novas experiências, fortalecer amizades e construir lembranças fora da rotina escolar.</p><p>O destino, o período e o formato podem ser planejados conforme o perfil do grupo. Converse com a Exclusiva para avaliar as possibilidades e os detalhes de organização.</p><a class="button" href="{{ route('contato') }}">Planeje a viagem <span aria-hidden="true">↗</span></a></div>
    </section>
    <section class="page-section page-section-tint"><div class="section-wrap"><div class="section-heading"><div><p class="eyebrow"><span class="eyebrow-line"></span>DO PLANO À VIAGEM</p><h2>Um projeto feito <em>em conjunto.</em></h2></div></div><div class="value-grid">
        <article class="value-card"><span class="value-number">01</span><h3>Entender o grupo</h3><p>Alinhamos expectativas, perfil dos viajantes e necessidades da turma.</p></article>
        <article class="value-card"><span class="value-number">02</span><h3>Conversar sobre opções</h3><p>Avaliamos destinos e formatos possíveis com a escola, responsáveis e estudantes.</p></article>
        <article class="value-card"><span class="value-number">03</span><h3>Organizar os detalhes</h3><p>Planejamos os próximos passos com clareza, conforme as escolhas e condições definidas.</p></article>
    </div></div></section>
@endsection
