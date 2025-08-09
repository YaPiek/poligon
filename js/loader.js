/* ===== Lodowy kryształ loader ===== */
window.addEventListener('load', () => {
  const loader = document.querySelector('.loader');
  loader.innerHTML = `
    <div class="crystal-container">
      <div class="crystal"></div>
      <div class="crystal-shadow"></div>
    </div>
  `;

  setTimeout(() => {
    loader.style.opacity = '0';
    setTimeout(() => (loader.style.display = 'none'), 600);
  }, 1800);
  
  document.body.classList.add('loaded');
});