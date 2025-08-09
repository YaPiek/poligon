// /js/navbar.js — bezpieczny na podstronach, z ARIA i blokadą scrolla
(() => {
  // Logo: delikatne skalowanie przy scrollu (jeśli istnieje)
  const logo = document.querySelector('.logo-fixed');

  const applyLogoState = () => {
    if (!logo) return;
    const y = window.scrollY || 0;
    logo.style.transform = y > 50 ? 'scale(0.4)' : 'scale(0.3)';
    logo.style.top = y > 50 ? '10px' : '20px';
  };

  if (logo) {
    applyLogoState();
    window.addEventListener('scroll', applyLogoState, { passive: true });
  }

  // Mobile menu
  const btn  = document.getElementById('mobile-menu');
  const list = document.querySelector('.nav-list');

  if (btn && list) {
    const toggleMenu = () => {
      const isOpen = !list.classList.contains('active');
      btn.classList.toggle('is-active', isOpen);
      list.classList.toggle('active', isOpen);
      document.body.classList.toggle('no-scroll', isOpen);
      btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    };

    btn.addEventListener('click', toggleMenu);

    // Zamknięcie po kliknięciu linku
    list.addEventListener('click', (e) => {
      if (e.target.closest('a')) {
        btn.classList.remove('is-active');
        list.classList.remove('active');
        document.body.classList.remove('no-scroll');
        btn.setAttribute('aria-expanded', 'false');
      }
    });

    // Zamknięcie ESC
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        btn.classList.remove('is-active');
        list.classList.remove('active');
        document.body.classList.remove('no-scroll');
        btn.setAttribute('aria-expanded', 'false');
      }
    });
  }
})();
