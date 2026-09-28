@extends('layouts.site', ['title' => 'Formaturas', 'description' => 'Planeje uma viagem de formatura com a Exclusiva Viagens.'])

@section('content')
    @include('partials.page-hero', ['title' => 'A próxima lembrança inesquecível', 'eyebrow' => 'VIAGENS DE FORMATURA', 'intro' => 'Uma conquista merece ser celebrada. Planeje uma experiência especial para a turma e aproveite cada momento juntos.', 'heroImage' => 'formaturas.jpg', 'cta' => 'Converse com a equipe'])
    <section class="page-section section-wrap about-story">
        <div class="about-image"><img src="{{ asset('assets/images/formaturas.jpg') }}" alt="Grupo de estudantes em viagem de formatura" loading="lazy"></div>
        <div class="page-copy"><p class="eyebrow"><span class="eyebrow-line"></span>UMA CONQUISTA EM GRUPO</p><h2>Comemore o caminho <em>que trouxe vocês até aqui.</em></h2><p>A viagem de formatura marca o encerramento de uma etapa e o começo de tantas outras. A Exclusiva ajuda a turma a conversar sobre opções de destino e organização para criar uma experiência que combine com o grupo.</p><p>As possibilidades são planejadas conforme o perfil da turma e as condições disponíveis. Fale com nossa equipe para iniciar a conversa.</p><a class="button" href="{{ route('contato') }}">Planeje com a Exclusiva <span aria-hidden="true">↗</span></a></div>
    </section>
    <section class="page-cta"><div class="section-wrap"><p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>PARA TURMAS DO 9º E 3º ANO</p><h2>Vamos começar a planejar <em>juntos?</em></h2><a class="button button-light" href="{{ route('contato') }}">Fale com um consultor <span aria-hidden="true">↗</span></a></div></section>
@endsection
