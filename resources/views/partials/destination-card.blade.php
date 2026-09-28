<article class="destination-card destination-content-card">
    <div class="destination-content-image"><img src="{{ asset('assets/images/' . $image) }}" alt="{{ $alt ?? $name }}" loading="lazy"></div>
    <div class="destination-content-copy"><p class="eyebrow"><span class="eyebrow-line"></span>{{ $eyebrow ?? 'DESTINO' }}</p><h2>{{ $name }}</h2><p>{{ $description }}</p><a class="text-link" href="{{ route('contato') }}">Consulte a equipe <span aria-hidden="true">→</span></a></div>
</article>
