@extends('layouts.site', ['title' => 'Viagens nacionais', 'description' => 'Conheça opções de viagens e passeios nacionais da Exclusiva Viagens.'])

@section('content')
    @include('partials.page-hero', ['title' => 'Descubra o Brasil', 'eyebrow' => 'VIAGENS NACIONAIS', 'intro' => 'De paisagens naturais a destinos de cultura e fé, encontre ideias para sua próxima viagem.', 'heroImage' => 'CRISTO-REDENTOR-CORCOVADO-RJ-19.jpg'])
    <section class="page-section section-wrap"><div class="section-heading"><div><p class="eyebrow"><span class="eyebrow-line"></span>ROTEIROS PARA EXPLORAR</p><h2>O Brasil tem muito <em>a oferecer.</em></h2></div><p class="heading-aside">Conheça alguns dos destinos disponíveis em nossos roteiros. Consulte a equipe para informações e opções atualizadas.</p></div>
        <div class="destination-list">
            @include('partials.destination-card', ['name' => 'Mineral Tour', 'image' => 'mineral-tour-1.jpg', 'alt' => 'Mineral Tour', 'eyebrow' => 'NATUREZA E DESCOBERTA', 'description' => 'Uma experiência de visitação a um garimpo em atividade, com galerias de aproximadamente 200 metros.'])
            @include('partials.destination-card', ['name' => 'Morretes', 'image' => 'trem2.jpg', 'alt' => 'Trem turístico na região de Morretes', 'eyebrow' => 'SERRA E LITORAL', 'description' => 'Uma charmosa cidade do Paraná entre a Serra e o Litoral, conhecida por seus casarões preservados e restaurantes.'])
            @include('partials.destination-card', ['name' => 'Aparecida do Norte', 'image' => 'aparecida-do-norte.jpg', 'alt' => 'Santuário Nacional de Aparecida', 'eyebrow' => 'FÉ E CULTURA', 'description' => 'Destino no Vale do Paraíba Paulista, no interior do estado de São Paulo.'])
        </div>
    </section>
    <section class="page-cta"><div class="section-wrap"><p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>VAMOS PLANEJAR?</p><h2>O próximo destino pode ser <em>seu.</em></h2><a class="button button-light" href="{{ route('contato') }}">Converse com a equipe <span aria-hidden="true">↗</span></a></div></section>
@endsection
