function initMiniVideo() {
  const thumb = document.querySelector('.video-thumb');
  const modal = document.getElementById('modalVideo');
  if (!thumb || !modal) return;
  const close = document.querySelector('.modal-close');
  const video = modal.querySelector('video');

  thumb.addEventListener('click', () => {
    modal.style.display = 'block';
    video.play();
  });
  close.addEventListener('click', () => {
    modal.style.display = 'none';
    video.pause();
  });
  window.addEventListener('click', e => {
    if (e.target === modal) {
      modal.style.display = 'none';
      video.pause();
    }
  });
}