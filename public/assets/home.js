/* Exclusiva Viagens — home interactions */
(function () {
  'use strict';

  const progress = document.querySelector('.scroll-progress');
  const header = document.querySelector('.site-header');
  const toggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.main-nav');
  const parallaxEls = document.querySelectorAll('[data-parallax]');
  const tiltCards = document.querySelectorAll('[data-tilt]');
  const reveals = document.querySelectorAll('[data-reveal]');
  const slides = document.querySelectorAll('.hero-slide');
  const slideIndex = document.querySelector('.hero-index strong');
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

  if (slides.length > 1 && !reducedMotion.matches) {
    let activeSlide = 0;
    window.setInterval(() => {
      slides[activeSlide].classList.remove('is-active');
      activeSlide = (activeSlide + 1) % slides.length;
      slides[activeSlide].classList.add('is-active');
      if (slideIndex) {
        slideIndex.textContent = String(activeSlide + 1).padStart(2, '0');
      }
    }, 5000);
  }

  function onScroll() {
    const scrollTop = window.scrollY;
    const maxScroll = document.documentElement.scrollHeight - window.innerHeight;

    if (progress) {
      progress.style.setProperty('--progress', `${maxScroll > 0 ? scrollTop / maxScroll * 100 : 0}%`);
    }
    if (header) {
      header.classList.toggle('scrolled', scrollTop > 60);
    }

    parallaxEls.forEach((element) => {
      const rate = Number.parseFloat(element.dataset.parallax) || 0;
      const section = element.closest('section') || element.parentElement;
      const bounds = section.getBoundingClientRect();
      const offset = bounds.top + bounds.height / 2 - window.innerHeight / 2;
      element.style.transform = `translate3d(0, ${offset * rate}px, 0)`;
    });
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    reveals.forEach((element) => observer.observe(element));
  } else {
    reveals.forEach((element) => element.classList.add('visible'));
  }

  tiltCards.forEach((card) => {
    let animationFrame;
    card.addEventListener('mouseenter', () => {
      card.style.transition = 'transform 0.12s linear, box-shadow 0.4s';
    });
    card.addEventListener('mousemove', (event) => {
      cancelAnimationFrame(animationFrame);
      animationFrame = requestAnimationFrame(() => {
        const bounds = card.getBoundingClientRect();
        const horizontal = (event.clientX - (bounds.left + bounds.width / 2)) / (bounds.width / 2);
        const vertical = (event.clientY - (bounds.top + bounds.height / 2)) / (bounds.height / 2);
        card.style.transform = `perspective(900px) rotateY(${horizontal * 7}deg) rotateX(${-vertical * 5}deg) scale3d(1.025,1.025,1.025)`;
      });
    });
    card.addEventListener('mouseleave', () => {
      cancelAnimationFrame(animationFrame);
      card.style.transition = 'transform 0.55s cubic-bezier(0.22,1,0.36,1), box-shadow 0.4s';
      card.style.transform = '';
    });
  });

  if (toggle && nav) {
    toggle.addEventListener('click', () => {
      const open = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!open));
      nav.classList.toggle('open', !open);
      document.body.style.overflow = !open ? 'hidden' : '';
    });
    nav.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        toggle.setAttribute('aria-expanded', 'false');
        nav.classList.remove('open');
        document.body.style.overflow = '';
      });
    });
  }
})();
