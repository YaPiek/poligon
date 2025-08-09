/* =========================================================
   vision.js – header + vision particles, blob, infinite loop
   ========================================================= */


/* 2.  BLOB MORPH (GSAP) ------------------------------------------- */
function initVisionBlob() {
  const blobPath = document.querySelector('#vision-section .blob path');
  if (!blobPath) return;

  gsap.to(blobPath, {
    duration: 20,
    repeat: -1,
    yoyo: true,
    ease: 'sine.inOut',
    attr: {
      d: 'M430,100C520,50,620,110,680,190S680,350,600,410S420,480,340,420S260,320,290,220S340,230,430,100Z'
    }
  });
}

/* 3.  INFINITE RTL CARD LOOP -------------------------------------- */
function initInfiniteLoop() {
  const track = document.querySelector('#vision-section .scroll-track');
  if (!track) return;

 
  let pos = 0;
  const speed = 0.7;                 // px/frame – tweak as needed

  track.style.scrollBehavior = 'auto'; // prevent CSS scroll-behavior conflicts

  function loop() {
    pos += speed;
    const half = track.scrollWidth / 2;
    if (pos >= half) pos -= half;
    track.scrollLeft = pos;
    requestAnimationFrame(loop);
  }
  loop();
}

/* 4.  FIRE EVERYTHING --------------------------------------------- */
document.addEventListener('DOMContentLoaded', () => {
  initVisionBlob();
  initInfiniteLoop();
});