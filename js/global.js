// global.js – zbiorcze animacje GSAP + back-to-top + timeline

// -------------- GSAP Setup --------------
gsap.registerPlugin(ScrollTrigger);

// --------------- AOS Setup --------------
AOS.init();

// -------------- Blob morph --------------
function initGlobalAnimations() {
  const blobPath = document.querySelector("#vision-section .blob path");
  if (blobPath) {
    gsap.to(blobPath, {
      duration: 20,
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut",
      attr: {
        d: "M430,100C520,50,620,110,680,190S680,350,600,410S420,480,340,420S260,320,290,220S340,230,430,100Z"
      }
    });
  }

  const visionSection = document.getElementById("vision-section");

  // -------------- Horizontal parallax – desktop only --------------
  if (visionSection && window.innerWidth > 992) {
    const scrollTrack = visionSection.querySelector(".scroll-track");
    if (scrollTrack) {
      gsap.to(scrollTrack, {
        xPercent: -50,
        ease: "none",
        scrollTrigger: {
          trigger: visionSection,
          start: "top bottom",
          end: "bottom top",
          scrub: 1.2
        }
      });
    }
  }

  // -------------- Title reveal --------------
  if (visionSection) {
    const vTitle = visionSection.querySelector(".v-title");
    if (vTitle) {
      gsap.from(vTitle, {
        y: 50,
        opacity: 0,
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
          trigger: visionSection,
          start: "top 70%",
          toggleActions: "play none none reverse"
        }
      });
    }
  }
}

// -------------- Image parallax --------------
function initImageParallax() {
  const imgs = document.querySelectorAll('.card img, .showcase-card img');
  if (!imgs.length) return;
  window.addEventListener('scroll', () => {
    const y = window.pageYOffset;
    imgs.forEach(img => {
      img.style.transform = `translateY(${-y * 0.25}px) translateZ(0)`;
    });
  });
}

// -------------- Back-to-top --------------
function initBackTop() {
  const btn = document.getElementById('backTop');
  if (!btn) return;
  const circle = btn.querySelector('circle');
  const c = 2 * Math.PI * 18;
  circle.style.strokeDasharray = c;
  circle.style.strokeDashoffset = c;

  const toggle = () => btn.classList.toggle('show', window.scrollY > 300);
  const update = () => {
    const p = window.scrollY / (document.documentElement.scrollHeight - window.innerHeight);
    circle.style.strokeDashoffset = c * (1 - p);
  };

  window.addEventListener('scroll', () => { toggle(); update(); });
  btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}

// -------------- Timeline progress --------------
function initTimelineProgress() {
  const track = document.querySelector('.timeline-track');
  if (!track) return;
  gsap.fromTo(
    '.timeline-track::before',
    { width: '0%' },
    {
      width: '100%',
      ease: 'none',
      scrollTrigger: {
        trigger: track,
        start: 'top 80%',
        end: 'bottom 20%',
        scrub: 1.2
      }
    }
  );
}

// -------------- Nav scroll class --------------
window.addEventListener('scroll', () => {
  const nav = document.getElementById('main-nav');
  if (nav) nav.classList.toggle('scrolled', window.scrollY > 50);
});

// -------------- Init on DOMContentLoaded --------------
document.addEventListener('DOMContentLoaded', () => {
  initGlobalAnimations();
  initImageParallax();
  initBackTop();
  initTimelineProgress();
});


// ---------------- Page Settings ----------------
