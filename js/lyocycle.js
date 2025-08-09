/* ================= lyocycle.js ================= */
document.addEventListener('DOMContentLoaded', () => {
  // Smooth scrolling
  const btn = document.querySelector('.lyo-cta');
  if (btn) {
    btn.addEventListener('click', () => {
      document.getElementById('lyocycle')
              .scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  }

  // Counter animation
  const counters = document.querySelectorAll('.lyo-stat-number');
  const speed = 200;
  
  const animateCounters = () => {
    counters.forEach(counter => {
      const target = +counter.getAttribute('data-count');
      const count = +counter.innerText;
      const increment = target / speed;
      
      if (count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(animateCounters, 1);
      } else {
        counter.innerText = target.toLocaleString();
      }
    });
  };

  // Intersection Observer for animations
  const observerOptions = {
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animated');
        if (entry.target.classList.contains('lyo-stat-number')) {
          animateCounters();
        }
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Observe elements
  const elementsToObserve = document.querySelectorAll('.lyo-left, .lyo-right, .lyo-stat-number');
  elementsToObserve.forEach(el => observer.observe(el));

  // Hover effect for list items
  const listItems = document.querySelectorAll('.lyo-list li');
  listItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      item.style.transform = 'translateX(10px)';
      item.style.background = 'rgba(0, 255, 136, 0.1)';
    });
    item.addEventListener('mouseleave', () => {
      item.style.transform = '';
      item.style.background = '';
    });
  });
});