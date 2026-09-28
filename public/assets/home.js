/* Exclusiva Viagens — home interactions */
(function () {
  'use strict';

  const progress = document.querySelector('.scroll-progress');
  const header   = document.querySelector('.site-header');
  const toggle   = document.querySelector('.menu-toggle');
  const nav      = document.querySelector('.main-nav');
  const parallaxEls = document.querySelectorAll('[data-parallax]');
  const tiltCards   = document.querySelectorAll('[data-tilt]');
  const reveals     = document.querySelectorAll('[data-reveal]');

  /* ── SCROLL: progress + header + parallax ── */
  function onScroll() {
    const st  = window.scrollY;
    const max = document.documentElement.scrollHeight - window.innerHeight;

    if (progress) progress.style.setProperty('--progress', `${(st / max) * 100}%`);
    if (header)   header.classList.toggle('scrolled', st > 60);

    parallaxEls.forEach(el => {
      const rate = parseFloat(el.dataset.parallax) || 0;
      const section = el.closest('section') || el.parentElement;
      const rect   = section.getBoundingClientRect();
      const centre = rect.top + rect.height / 2 - window.innerHeight / 2;
      el.style.transform = `translate3d(0, ${centre * rate}px, 0)`;
    });
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ── SCROLL REVEAL (IntersectionObserver) ── */
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (!e.isIntersecting) return;
        e.target.classList.add('visible');
        io.unobserve(e.target);
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    reveals.forEach(el => io.observe(el));
  } else {
    reveals.forEach(el => el.classList.add('visible'));
  }

  /* ── 3-D CARD TILT ── */
  tiltCards.forEach(card => {
    let raf;
    card.addEventListener('mouseenter', () => {
      card.style.transition = 'transform 0.12s linear, box-shadow 0.4s';
    });
    card.addEventListener('mousemove', e => {
      cancelAnimationFrame(raf);
      raf = requestAnimationFrame(() => {
        const r   = card.getBoundingClientRect();
        const dx  = (e.clientX - (r.left + r.width  / 2)) / (r.width  / 2);
        const dy  = (e.clientY - (r.top  + r.height / 2)) / (r.height / 2);
        card.style.transform =
          `perspective(900px) rotateY(${dx * 7}deg) rotateX(${-dy * 5}deg) scale3d(1.025,1.025,1.025)`;
      });
    });
    card.addEventListener('mouseleave', () => {
      cancelAnimationFrame(raf);
      card.style.transition = 'transform 0.55s cubic-bezier(0.22,1,0.36,1), box-shadow 0.4s';
      card.style.transform  = '';
    });
  });

  /* ── MOBILE MENU ── */
  if (toggle && nav) {
    toggle.addEventListener('click', () => {
      const open = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!open));
      nav.classList.toggle('open', !open);
      document.body.style.overflow = !open ? 'hidden' : '';
    });
    /* close on link click */
    nav.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        toggle.setAttribute('aria-expanded', 'false');
        nav.classList.remove('open');
        document.body.style.overflow = '';
      });
    });
  }
})();
