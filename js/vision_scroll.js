// js/vision_scroll.js
document.addEventListener('DOMContentLoaded', () => {
  const scrollTrack = document.querySelector('#vision-section .scroll-track');
  if (!scrollTrack) return;

  // Duplikujemy karty, by uzyskać ciągłą pętlę
  scrollTrack.innerHTML += scrollTrack.innerHTML;

  let scrollPos = 0;
  const speed   = 0.5;  // px na klatkę – dostosuj według potrzeb

  function autoScroll() {
    scrollPos += speed;
    if (scrollPos >= scrollTrack.scrollWidth / 2) {
      scrollPos -= scrollTrack.scrollWidth / 2;
    }
    scrollTrack.scrollLeft = scrollPos;
    requestAnimationFrame(autoScroll);
  }

  // Wyłącz smooth scroll CSS, aby nie kolidował
  scrollTrack.style.scrollBehavior = 'auto';

  autoScroll();
});
