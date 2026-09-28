@extends('layouts.site', ['title' => 'Contato', 'description' => 'Fale com a equipe da Exclusiva Viagens em Porto Alegre.'])

@section('content')
    @include('partials.page-hero', ['title' => 'Vamos conversar?', 'eyebrow' => 'FALE COM A GENTE', 'intro' => 'Tire suas dúvidas sobre viagens e conte o que você está planejando. Nossa equipe está à disposição.'])
    <section class="page-section section-wrap"><div class="section-heading"><div><p class="eyebrow"><span class="eyebrow-line"></span>ESTAMOS POR AQUI</p><h2>Seu próximo plano<br>começa com <em>um oi.</em></h2></div></div>
        <div class="contact-grid">
            <article class="contact-card contact-main"><p class="eyebrow"><span class="eyebrow-line"></span>ESCRITÓRIO</p><h2>Exclusiva Viagens</h2><ul class="contact-list"><li><span>Telefone</span><a href="tel:+555141416314">(51) 4141-6314</a></li><li><span>E-mail</span><a href="mailto:exclusiva@exclusivaviagens.com.br">exclusiva@exclusivaviagens.com.br</a></li><li><span>Endereço</span><span>Rua Vigário José Inácio, 547, sala 608<br>Centro — Porto Alegre, RS</span></li></ul><a class="text-link" href="https://goo.gl/maps/tLTyv7fPzCWri5CN8" target="_blank" rel="noopener noreferrer">Ver endereço no mapa <span aria-hidden="true">↗</span></a></article>
            <article class="contact-card"><p class="eyebrow"><span class="eyebrow-line"></span>ESTUDANTIL E PEDAGÓGICO</p><h3>Luciano</h3><ul class="contact-list"><li><span>Telefone</span><a href="tel:+5551999239678">(51) 99923-9678</a></li><li><span>E-mail</span><a href="mailto:luciano@exclusivaviagens.com.br">luciano@exclusivaviagens.com.br</a></li></ul></article>
            <article class="contact-card"><p class="eyebrow"><span class="eyebrow-line"></span>VIAGENS E PACOTES</p><h3>Marilza</h3><ul class="contact-list"><li><span>Telefone</span><a href="tel:+5551993661404">(51) 99366-1404</a></li><li><span>E-mail</span><a href="mailto:marilza@exclusivaviagens.com.br">marilza@exclusivaviagens.com.br</a></li></ul></article>
        </div>
    </section>
@endsection
