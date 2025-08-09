/* ===== Hero Parallax (desktop) ===== */
function initHeroParallax() {
  const heroInner = document.querySelector('.hero-content');
  if (heroInner && window.innerWidth > 768) {
    let rafId = null;
    function handleMouseMove(e) {
      if (rafId !== null) return;
      rafId = requestAnimationFrame(() => {
        const x = (e.clientX / window.innerWidth - 0.5) * 30;
        const y = (e.clientY / window.innerHeight - 0.5) * 30;
        heroInner.style.transform = `rotateY(${x}deg) rotateX(${-y}deg)`;
        rafId = null;
      });
    }
    window.addEventListener('mousemove', handleMouseMove);
  } else if (!heroInner) {
    console.warn("Hero parallax: '.hero-content' element not found.");
  }
}
document.addEventListener('DOMContentLoaded', initHeroParallax);
