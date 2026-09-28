@extends('layouts.site', ['title' => 'Galeria de fotos', 'description' => 'Imagens de lugares e experiências que inspiram novas viagens.'])

@section('content')
    @include('partials.page-hero', ['title' => 'Histórias em imagens', 'eyebrow' => 'GALERIA', 'intro' => 'Um pouco dos lugares, paisagens e momentos que fazem a vontade de viajar crescer.', 'heroImage' => 'travel-trip-map-direction-exploration-planning-concept.jpg'])
    <section class="page-section section-wrap"><div class="section-heading"><div><p class="eyebrow"><span class="eyebrow-line"></span>INSPIRAÇÃO PARA SUA PRÓXIMA VIAGEM</p><h2>Olhares pelo <em>mundo.</em></h2></div></div>
        <div class="photo-grid">
            @foreach ([['1.jpg', 'Paisagem de viagem'], ['3.jpg', 'Um lugar para descobrir'], ['4.jpg', 'Cenário de viagem'], ['5.jpg', 'Momentos pelo caminho'], ['7.jpg', 'Uma paisagem para lembrar'], ['1530550481.jpg', 'Um destino especial'], ['BARILOCHE-1-scaled-min.jpg', 'Paisagem de Bariloche'], ['1524672665.jpg', 'Natureza e descoberta'], ['1524672658.jpg', 'Cenário de viagem'], ['1526660859.jpg', 'Uma experiência pelo mundo'], ['1526660862.jpg', 'Paisagem internacional'], ['1526660868.jpg', 'Viagem e novas descobertas']] as [$image, $alt])
                <figure class="photo-card"><img src="{{ asset('assets/images/' . $image) }}" alt="{{ $alt }}" loading="lazy"></figure>
            @endforeach
        </div>
    </section>
@endsection
