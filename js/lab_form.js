function initLabForm() {
  const form = document.getElementById('sampleForm');
  if (!form) return;
  form.addEventListener('submit', e => {
    e.preventDefault();
    form.innerHTML = '<p style="text-align:center;color:var(--c3)">Wysyłanie…</p>';
    setTimeout(() => {
      form.innerHTML = '<p style="text-align:center;color:var(--c3)">Dzięki! Skontaktujemy się w ciągu 24h.</p>';
    }, 1500);
  });
}