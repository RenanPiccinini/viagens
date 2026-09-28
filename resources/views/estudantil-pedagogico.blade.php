@extends('layouts.site', ['title' => 'Estudantil pedagógico', 'description' => 'Viagens escolares e pedagógicas que aproximam estudantes de novos lugares, culturas e conhecimentos.'])

@section('content')
    @include('partials.page-hero', ['title' => 'Aprender também é viajar', 'eyebrow' => 'ESTUDANTIL · PEDAGÓGICO', 'intro' => 'Uma experiência fora da sala de aula pode transformar curiosidade em descoberta e conteúdo em memória.', 'heroImage' => 'programas-de-intercambio-740x360-1.jpg', 'cta' => 'Planeje com a gente'])
    <section class="page-section section-wrap about-story">
        <div class="about-image"><img src="{{ asset('assets/images/programas-de-intercambio-740x360-1.jpg') }}" alt="Estudantes conhecendo novos lugares" loading="lazy"></div>
        <div class="page-copy"><p class="eyebrow"><span class="eyebrow-line"></span>CONHECIMENTO EM MOVIMENTO</p><h2>Uma sala de aula <em>sem paredes.</em></h2><p>Viagens pedagógicas oferecem aos estudantes a oportunidade de observar, perguntar e se conectar com temas estudados em aula. Cada roteiro pode ser pensado junto à instituição de ensino, considerando objetivos educacionais, perfil da turma e período disponível.</p><p>Da escolha do tema à organização da jornada, a equipe da Exclusiva pode conversar com a escola para entender suas necessidades e apoiar o planejamento.</p></div>
    </section>
    <section class="page-section page-section-tint"><div class="section-wrap"><div class="section-heading"><div><p class="eyebrow"><span class="eyebrow-line"></span>IDEIAS DE APRENDIZAGEM</p><h2>Descobrir o mundo <em>em conjunto.</em></h2></div><p class="heading-aside">O tema e o formato são definidos de acordo com o projeto pedagógico de cada grupo.</p></div><div class="value-grid">
        <article class="value-card"><span class="value-number">01</span><h3>História e patrimônio</h3><p>Explorar lugares, narrativas e patrimônios culturais como extensão dos estudos da turma.</p></article>
        <article class="value-card"><span class="value-number">02</span><h3>Natureza e território</h3><p>Observar paisagens, ecossistemas e a relação entre comunidades e seus ambientes.</p></article>
        <article class="value-card"><span class="value-number">03</span><h3>Cultura e convivência</h3><p>Conhecer manifestações culturais e praticar a colaboração e a autonomia em grupo.</p></article>
    </div></div></section>
    <section class="page-cta"><div class="section-wrap"><p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>PARA ESCOLAS E EDUCADORES</p><h2>Vamos conversar sobre<br><em>o projeto da sua turma?</em></h2><a class="button button-light" href="{{ route('contato') }}">Fale com a Exclusiva <span aria-hidden="true">↗</span></a></div></section>
@endsection
