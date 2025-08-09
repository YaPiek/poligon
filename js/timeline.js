// timeline-enhanced.js

document.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll('.timeline-item');
  const progressLine = document.querySelector('.timeline-progress');
  const track = document.querySelector('.timeline-track');

  // IntersectionObserver options
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  // Observer callback for items
  const itemObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      const element = entry.target;
      const dot = element.querySelector('::before'); // pseudo-element
      const label = element.querySelector('span');

      if (entry.isIntersecting) {
        // Add visible class to fade-in elements
        element.querySelector('.fade-in')?.classList.add('visible');
        element.querySelector('span')?.classList.add('visible');
        // Animate dot by toggling a class
        element.classList.add('visible');
      }
    });
  }, options);

  items.forEach(item => itemObserver.observe(item));

  // Observer for progress line update
  const progressObserver = new IntersectionObserver((entries) => {
    // find all items that are visible
    const visibleItems = [...items].filter(item => item.getBoundingClientRect().top < window.innerHeight);
    if (visibleItems.length) {
      const lastVisible = visibleItems[visibleItems.length - 1];
      const trackRect = track.getBoundingClientRect();
      const lastRect = lastVisible.getBoundingClientRect();
      const progressHeight = Math.min(
        ((lastRect.top + lastRect.height / 2) - trackRect.top) / trackRect.height * 100,
        100
      );
      progressLine.style.height = `${progressHeight}%`;
    }
  }, {root: null, threshold: 0});

  progressObserver.observe(document.querySelector('#timeline-section'));

  // Optional: throttle scroll event for performance
  window.addEventListener('scroll', () => {
    progressObserver.takeRecords();
  });
});