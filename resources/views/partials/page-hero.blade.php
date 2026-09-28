<section class="page-hero" @isset($heroImage) style="--page-hero-image: url('{{ asset('assets/images/' . $heroImage) }}')" @endisset>
    <div class="section-wrap page-hero-content">
        <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>{{ $eyebrow ?? 'EXCLUSIVA VIAGENS' }}</p>
        <h1>{{ $title }}</h1>
        @isset($intro)<p class="page-hero-intro">{{ $intro }}</p>@endisset
        @isset($cta)<a class="button button-light" href="{{ $ctaUrl ?? route('contato') }}">{{ $cta }} <span aria-hidden="true">↗</span></a>@endisset
    </div>
</section>
