/* ===== Ripple na kliknięcie ===== */
function initProductRipple() {
  const cards = document.querySelectorAll('.card');
  cards.forEach(card => {
    card.addEventListener('click', e => {
      // usuń poprzednie ripples
      card.querySelectorAll('.ripple').forEach(r => r.remove());

      const rect = card.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;

      const ripple = document.createElement('span');
      ripple.className = 'ripple';
      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = x + 'px';
      ripple.style.top = y + 'px';

      card.appendChild(ripple);
      // auto-czyszczenie
      ripple.addEventListener('animationend', () => ripple.remove());
    });
  });
}

// Uruchom po załadowaniu
document.addEventListener('DOMContentLoaded', initProductRipple);