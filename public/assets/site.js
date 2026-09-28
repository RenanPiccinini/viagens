const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.main-nav');
const dropdown = document.querySelector('.nav-dropdown');
const dropdownLink = dropdown?.querySelector(':scope > a');

menuButton?.addEventListener('click', () => {
    const expanded = menuButton.getAttribute('aria-expanded') === 'true';
    menuButton.setAttribute('aria-expanded', String(!expanded));
    menuButton.setAttribute('aria-label', expanded ? 'Abrir menu' : 'Fechar menu');
    navigation?.classList.toggle('open', !expanded);
    document.body.classList.toggle('menu-open', !expanded);
});

dropdownLink?.addEventListener('click', (event) => {
    if (window.matchMedia('(max-width: 768px)').matches) {
        event.preventDefault();
        const expanded = dropdown.classList.toggle('expanded');
        dropdownLink.setAttribute('aria-expanded', String(expanded));
    }
});

document.addEventListener('click', (event) => {
    if (menuButton?.getAttribute('aria-expanded') === 'true' && !event.target.closest('.site-header')) {
        menuButton.setAttribute('aria-expanded', 'false');
        menuButton.setAttribute('aria-label', 'Abrir menu');
        navigation?.classList.remove('open');
        document.body.classList.remove('menu-open');
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        menuButton?.setAttribute('aria-expanded', 'false');
        menuButton?.setAttribute('aria-label', 'Abrir menu');
        navigation?.classList.remove('open');
        dropdown?.classList.remove('expanded');
        dropdownLink?.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('menu-open');
    }
});

const header = document.querySelector('.site-header');
const progress = document.querySelector('.scroll-progress');
const updateScrollState = () => {
    header?.classList.toggle('scrolled', window.scrollY > 24);
    if (progress) {
        const range = document.documentElement.scrollHeight - window.innerHeight;
        progress.style.setProperty('--progress', `${range > 0 ? window.scrollY / range * 100 : 0}%`);
    }
};
window.addEventListener('scroll', updateScrollState, { passive: true });
updateScrollState();
