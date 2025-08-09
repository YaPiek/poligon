// how-it-works-parallax.js
document.addEventListener('scroll', () => {
  const section = document.getElementById('how-it-works');
  if (!section) return;

  const y = window.scrollY;
  // blob1 moves slower (background blob)
  const blobA = section.querySelector(':before') || section; 
  // blob2 moves slightly faster
  const blobB = section.querySelector(':after') || section;

  // Użyj CSS custom properties do przesunięcia
  section.style.setProperty('--blobA-y', `${y * 0.2}px`);
  section.style.setProperty('--blobB-y', `${y * -0.15}px`);
});
