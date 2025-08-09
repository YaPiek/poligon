/* particles-uni.js – uniwersalna konfiguracja particles.js */
document.addEventListener('DOMContentLoaded', () => {
  if (!window.particlesJS) {
    console.warn('particles.js not loaded');
    return;
  }

  /* ========== 1. HERO / HEADER (#particles-js) ========== */
  if (document.getElementById('particles-js')) {
    particlesJS('particles-js', {
      particles: {
        number: { value: 60, density: { enable: true, value_area: 800 } },
        color: { value: '#FFFFFF' },
        shape: { type: 'circle' },
        opacity: { value: 0.3 },
        size: { value: 2, random: true },
        move: { enable: true, speed: 1, direction: 'none', out_mode: 'out' },
        line_linked: {
          enable: true,
          distance: 120,
          color: '#FFFFFF',
          opacity: 0.2,
          width: 1
        }
      },
      interactivity: {
        detect_on: 'canvas',
        events: {
          onhover: { enable: true, mode: 'grab' },
          onclick: { enable: true, mode: 'push' }
        },
        modes: {
          grab: { distance: 140, line_linked: { opacity: 0.5 } },
          push: { particles_nb: 4 }
        }
      },
      retina_detect: true
    });
  }

  /* ========== 2. VISION SECTION (#visionParticles) ========== */
  if (document.getElementById('visionParticles')) {
    particlesJS('visionParticles', {
      particles: {
        number: { value: 40 },
        shape: { type: 'circle' },
        size: { value: 3 },
        line_linked: { enable: true, color: '#00ff88', opacity: 0.2 },
        move: { speed: 2 }
      },
      interactivity: {
        events: { onhover: { enable: true, mode: 'repulse' } }
      }
    });
  }
});