@extends('layouts.site', ['title' => 'Viagens internacionais', 'description' => 'Explore roteiros internacionais com a Exclusiva Viagens.'])

@section('content')
    @include('partials.page-hero', ['title' => 'O mundo espera por você', 'eyebrow' => 'VIAGENS INTERNACIONAIS', 'intro' => 'Paisagens marcantes e novas culturas para inspirar a sua próxima jornada.', 'heroImage' => 'circuito-andino.jpg'])
    <section class="page-section section-wrap"><div class="section-heading"><div><p class="eyebrow"><span class="eyebrow-line"></span>ROTEIROS PARA EXPLORAR</p><h2>Experiências além <em>das fronteiras.</em></h2></div><p class="heading-aside">Consulte nossa equipe sobre roteiros, disponibilidade e informações atualizadas.</p></div>
        <div class="destination-list">
            @include('partials.destination-card', ['name' => 'Circuito Andino', 'image' => '1526660879-1.jpg', 'alt' => 'Paisagem de montanhas no Circuito Andino', 'eyebrow' => 'NATUREZA E CULTURA', 'description' => 'A região dos Lagos Andinos combina natureza exuberante, vulcões e cidades acolhedoras como Puerto Varas e Peulla. Roteiros também podem incluir Santiago, Buenos Aires e Bariloche.'])
            @include('partials.destination-card', ['name' => 'Costa neoRiviera', 'image' => 'costa-neoriviera-ta-listings.jpg', 'alt' => 'Navio de cruzeiro Costa neoRiviera', 'eyebrow' => 'CRUZEIRO', 'description' => 'Uma experiência de viagem pelo mar a bordo do Costa neoRiviera. Entre em contato para saber quais opções estão disponíveis.'])
        </div>
    </section>
    <section class="page-cta"><div class="section-wrap"><p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>SEU PRÓXIMO CAPÍTULO</p><h2>Vamos encontrar seu <em>destino?</em></h2><a class="button button-light" href="{{ route('contato') }}">Fale com um consultor <span aria-hidden="true">↗</span></a></div></section>
@endsection
