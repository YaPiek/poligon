document.addEventListener('DOMContentLoaded', () => {
  // 1. Animate feature items on scroll
  const animateFeatures = () => {
    const features = document.querySelectorAll('.feature-item');
    
    if (features.length) {
      const io = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
          if (entry.isIntersecting) {
            setTimeout(() => {
              entry.target.classList.add('visible');
            }, index * 100);
          }
        });
      }, { threshold: 0.1 });
  
      features.forEach(feature => io.observe(feature));
    }
  };
  
  // 2. Parallax effect for background
  const initParallax = () => {
    const section = document.querySelector('.features-icons');
    if (section) {
      window.addEventListener('mousemove', (e) => {
        const x = (e.clientX / window.innerWidth - 0.5) * 30;
        const y = (e.clientY / window.innerHeight - 0.5) * 20;
        document.documentElement.style.setProperty('--mouse-x', `${x}px`);
        document.documentElement.style.setProperty('--mouse-y', `${y}px`);
      });
    }
  };
  
  // 3. Add hover effects to categories
  const initCategoryHover = () => {
    const categories = document.querySelectorAll('.features-category');
    categories.forEach(category => {
      category.addEventListener('mouseenter', () => {
        category.style.transform = 'scale(1.05)';
      });
      category.addEventListener('mouseleave', () => {
        category.style.transform = 'scale(1)';
      });
    });
  };
  
  // Initialize all effects
  animateFeatures();
  initParallax();
  initCategoryHover();
});