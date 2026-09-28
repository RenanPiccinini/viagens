<footer class="site-footer">
    <div class="footer-top section-wrap">
        <a class="brand brand-footer" href="{{ route('home') }}" aria-label="Exclusiva Viagens, início"><img class="brand-logo" src="{{ asset('images/logo.png') }}" alt="Exclusiva Viagens"></a>
        <p>Há mais de 20 anos<br>levando você mais longe.</p>
        <a class="footer-contact" href="{{ route('contato') }}">Vamos planejar<br>sua próxima viagem? <span aria-hidden="true">↗</span></a>
    </div>
    <div class="footer-bottom section-wrap">
        <span>© {{ date('Y') }} Exclusiva Viagens</span>
        <div><a href="{{ route('nacionais') }}">Destinos nacionais</a><a href="{{ route('internacionais') }}">Destinos internacionais</a><a href="{{ route('contato') }}">Contato</a></div>
        <a class="back-top" href="#top">Voltar ao topo ↑</a>
    </div>
</footer>
