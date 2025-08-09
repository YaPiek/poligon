 document.addEventListener('DOMContentLoaded', function() {
      const cards = document.querySelectorAll('#section-dream .card');
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, idx) => {
          if(entry.isIntersecting) {
            entry.target.style.animation = `fadeInUp 0.8s forwards ${0.2 + idx*0.2}s`;
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      cards.forEach(card => observer.observe(card));
    });