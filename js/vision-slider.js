/* vision-slider.js – responsywny slider (bez powtórzeń) */
function initVisionSlider() {
  const track = document.getElementById('sliderTrack');
  if (!track) return;

  function updateSlider() {
    const slides = track.querySelectorAll('.vision-slide');
    if (!slides.length) return;
    // (tutaj dopisz własną logikę – przesunięcie translateX itp.)
  }

  window.addEventListener('resize', updateSlider);
  document.addEventListener('DOMContentLoaded', updateSlider);
}

document.addEventListener('DOMContentLoaded', initVisionSlider);