// video_sep.js
document.addEventListener('DOMContentLoaded', () => {
  const section = document.querySelector('.video-sep-section');
  if (!section) {
    console.warn('Brak elementu .video-sep-section.');
    return;
  }

  // Teraz deklarujemy videoBg (kontener) i video (element <video>)
  const videoBg = section;
  const video   = section.querySelector('#background-video');

  // --- Przerwij, jeśli wideo nie istnieje ---
  if (!video) {
    console.warn('Nie znaleziono elementu #background-video – stosowanie fallback-u.');
    applyFallback();
    return;
  }

  // Funkcja dostosowania wysokości sekcji wideo
  function adjustVideoHeight() {
    const w = window.innerWidth;
    if (w <= 480) {
      videoBg.style.height    = '30vh';
      videoBg.style.minHeight = '200px';
      videoBg.style.maxHeight = '40vh';
    } else if (w <= 768) {
      videoBg.style.height    = '40vh';
      videoBg.style.minHeight = '250px';
      videoBg.style.maxHeight = '50vh';
    } else {
      videoBg.style.height    = '100vh';
      videoBg.style.minHeight = '';
      videoBg.style.maxHeight = '';
    }
  }

  // Fallback – obrazek zamiast wideo
  function applyFallback() {
    videoBg.style.background = 'url("<?php echo esc_url( get_template_directory_uri() . "/assets/images/fallback.jpg" ); ?>") center/cover no-repeat';
    video.style.display = 'none';
  }

  // Obsługa błędu ładowania
  video.addEventListener('error', () => {
    console.error('Błąd ładowania wideo:', video.error);
    applyFallback();
  });

  // Sprawdzenie dostępności pliku wideo
  fetch(video.currentSrc)
    .then(res => {
      if (!res.ok) throw new Error('Wideo nie załadowane: ' + res.status);
    })
    .catch(err => {
      console.error(err);
      applyFallback();
    });

  // Reduce motion
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    section.querySelectorAll('.depth-1, .depth-2').forEach(el => el.style.animation = 'none');
  }

  // Inicjalizacja i nasłuchiwanie resize
  adjustVideoHeight();
  window.addEventListener('resize', adjustVideoHeight);
});
