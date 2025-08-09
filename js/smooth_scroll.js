/* === Smooth Scroll Anchors (safe & lazy) === */
function enableSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    // zabezpieczenie przed podwójnym przypięciem
    if (a.dataset.smoothSet) return;
    a.dataset.smoothSet = true;

    a.addEventListener('click', e => {
      e.preventDefault();
      const targetId = a.getAttribute('href');
      const target = document.querySelector(targetId);
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
}

// 1. Działa od razu dla statycznego HTML
enableSmoothScroll();

// 2. Działa też dla elementów dopisanych później
if (window.MutationObserver) {
  new MutationObserver(() => enableSmoothScroll())
    .observe(document.body, { childList: true, subtree: true });
}