// process.js – wersja mobilna (kod w pełni działający)
const CANVAS_COLORS = ['#3d386d', '#4b51bd', '#564182', '#6e46a4', '#25285a', '#29194d'];

function initProcess() {
  /* ---------- KONFIGURACJA ---------- */
  const values = [
    {
      name: 'Zrównoważony Rozwój',
      color: '#3d386d',
      stats: ['-78% CO₂', '100% OZE', 'Zero waste'],
      // Lokalna ścieżka do grafiki – plik powinien znajdować się w katalogu assets/img w motywie
      image: 'https://lyocycle.pl/wp-content/themes/lyocycle-theme/img/rozwoj.png',
      desc: `Liofilizacja pozwala skutecznie przeciwdziałać marnowaniu żywności – produkty zachowują świeżość i wartość odżywczą na dłużej, a my ograniczamy ślad węglowy i zużycie energii.`
    },
    {
      name: 'Innowacyjność',
      color: '#4b51bd',
      stats: ['5 patenty', '15% R&D', 'AI optymalizacja'],
      // Lokalna ścieżka do grafiki
      image: 'https://lyocycle.pl/wp-content/themes/lyocycle-theme/img/inno.png',
      desc: `Nasza technologia stale się rozwija – inwestujemy w badania, automatyzację i autorskie rozwiązania.`
    },
    {
      name: 'Odpowiedzialność Społeczna',
      color: '#564182',
      stats: ['10+ projektów', '5000+ uczestników', '50 NGO'],
      image: 'https://lyocycle.pl/wp-content/themes/lyocycle-theme/img/spoleczne.png',
      desc: `Wspieramy inicjatywy lokalne, współpracujemy z organizacjami non-profit i edukujemy w zakresie niemarnowania żywności.`
    },
    {
      name: 'Współpraca',
      color: '#6e46a4',
      stats: ['200+ partnerów', '50 wspólnych projektów', '98% satysfakcji'],
      image: 'https://lyocycle.pl/wp-content/themes/lyocycle-theme/img/wspolpraca.png',
      desc: `Łączymy restauracje, sklepy i lokalnych producentów. Dzięki współpracy powstają nowe projekty.`
    },
    {
      name: 'Transparentność',
      color: '#25285a',
      stats: ['24/7 dane', 'Blockchain', '0 ukrytych składników'],
      image: 'https://lyocycle.pl/wp-content/themes/lyocycle-theme/img/transpa.png',
      desc: `Zapewniamy pełną przejrzystość naszych działań – od pozyskania surowców po gotowy produkt.`
    },
    {
      name: 'Jakość i Bezpieczeństwo',
      color: '#29194d',
      stats: ['99,9% zgodność', '0 incydentów', 'FSSC 22000'],
      image: 'https://lyocycle.pl/wp-content/themes/lyocycle-theme/img/jakosc.png',
      desc: `Najwyższe standardy bezpieczeństwa i jakości to dla nas priorytet.`
    },
  ];

  /* ---------- UI ---------- */
  const uiElement = document.querySelector('#uiElement');
  if (!uiElement) { console.error('Element #uiElement nie został znaleziony w DOM.'); return; }
  uiElement.innerHTML = '';

  values.forEach(v => {
    const sec = document.createElement('section');
    sec.className = 'value-section';
    sec.style.setProperty('--section-color', v.color);
    sec.innerHTML = `
      <div class="value-content">
        <div class="value-text">
          <h2>${v.name}</h2>
          <p>${v.desc}</p>
          <div class="mini-stats">
            ${v.stats.map(s => `<span class="mini-stat">${s}</span>`).join('')}
          </div>
        </div>
        ${v.image ? `<div class="value-image"><img src="${v.image}" alt="${v.name}" loading="lazy" onerror="this.src='../assets/images/placeholder.png'; this.alt='Obraz zastępczy'"></div>` : ''}
      </div>
    `;
    uiElement.appendChild(sec);
  });

  /* ---------- OBSERWATORY / EFEKTY ---------- */
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.3 });
  document.querySelectorAll('.value-section').forEach(el => io.observe(el));

  /* ---------- CANVAS ---------- */
  const cvs = document.getElementById('canvas');
  if (!cvs) return;
  const ctx = cvs.getContext('2d');
  let w, h;

  let ribbon = { points: [], len: 120, baseY: 0 };

  function resize() {
    w = cvs.width = innerWidth;
    h = cvs.height = innerHeight;
    ribbon.points = [];
    for (let i = 0; i < ribbon.len; i++) ribbon.points.push({ x: 0, y: h / 2 });
    ribbon.baseY = h / 2;
  }
  resize();
  addEventListener('resize', resize);

  let mouse = { x: w / 2, y: h / 2 };
  const pointer = e => {
    mouse.x = e.clientX ?? e.touches?.[0]?.clientX ?? mouse.x;
    mouse.y = e.clientY ?? e.touches?.[0]?.clientY ?? mouse.y;
  };
  addEventListener('mousemove', pointer);
  addEventListener('touchmove', pointer);

  function drawRibbon() {
    ctx.clearRect(0, 0, w, h);
    const scrollY = window.scrollY;
    ribbon.points.forEach((p, i) => {
      const norm = i / ribbon.len;
      const targetY = ribbon.baseY + Math.sin(norm * Math.PI * 2 + performance.now() / 900) * 60;
      const pull = mouse.y / 2 + scrollY / 4;
      p.y += (targetY + pull - p.y) * 0.08;
      p.x = norm * w;
    });

    ctx.beginPath();
    ctx.moveTo(0, h);
    ribbon.points.forEach(pt => ctx.lineTo(pt.x, pt.y));
    ctx.lineTo(w, h);
    ctx.closePath();

    const gradient = ctx.createLinearGradient(0, 0, w, 0);
    CANVAS_COLORS.forEach((col, i) => gradient.addColorStop(i / (CANVAS_COLORS.length - 1), col));
    ctx.globalAlpha = 0.65;
    ctx.shadowColor = "#11183b";
    ctx.shadowBlur = 24;
    ctx.fillStyle = gradient;
    ctx.fill();
    ctx.globalAlpha = 1;
    ctx.shadowBlur = 0;
  }

  function animate() {
    drawRibbon();
    requestAnimationFrame(animate);
  }
  animate();
}

/* ---------- URUCHOMIENIE ---------- */
function whenProcessSectionReady(cb) {
  const observer = new MutationObserver(() => {
    if (document.getElementById('canvas') && document.getElementById('uiElement')) {
      observer.disconnect();
      cb();
    }
  });
  observer.observe(document.body, { childList: true, subtree: true });
}
whenProcessSectionReady(initProcess);
window.initProcess = initProcess;
