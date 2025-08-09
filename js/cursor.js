/* ===== Custom Cursor ===== */
const cursor = document.querySelector('.cursor');
const follower = document.querySelector('.cursor-follower');

if (cursor && follower) {
  let mouseX = 0, mouseY = 0;
  let followerX = 0, followerY = 0;

  /* główne kółko (małe, na kursorze) */
  cursor.style.position = 'fixed';
  cursor.style.width = '12px';
  cursor.style.height = '12px';
  cursor.style.background = 'var(--c2)';
  cursor.style.borderRadius = '50%';
  cursor.style.pointerEvents = 'none';
  cursor.style.zIndex = '9999';
  cursor.style.opacity = '1';
  cursor.style.transition = 'transform .1s ease-out';

  /* większe, opóźnione kółko */
  follower.style.position = 'fixed';
  follower.style.width = '36px';
  follower.style.height = '36px';
  follower.style.border = '2px solid var(--c2)';
  follower.style.borderRadius = '50%';
  follower.style.pointerEvents = 'none';
  follower.style.zIndex = '9998';
  follower.style.opacity = '0.6';
  follower.style.transition = 'transform .25s ease-out';

  window.addEventListener('mousemove', e => {
    mouseX = e.clientX;
    mouseY = e.clientY;
  });

  function animateCursor() {
    followerX += (mouseX - followerX) * 0.1;
    followerY += (mouseY - followerY) * 0.1;

    cursor.style.transform = `translate(${mouseX}px, ${mouseY}px) translate(-50%, -50%)`;
    follower.style.transform = `translate(${followerX}px, ${followerY}px) translate(-50%, -50%)`;

    requestAnimationFrame(animateCursor);
  }
  animateCursor();

  /* ukryj domyślny systemowy kursor */
  document.documentElement.style.cursor = 'none';
}