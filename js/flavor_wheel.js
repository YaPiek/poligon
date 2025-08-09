function initFlavorWheel() {
  const canvas = document.getElementById('wheelCanvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  const flavors = ['Truskawka', 'Bazylia', 'Jalapeño', 'Kokos', 'Pieprz cytrynowy'];
  let angle = 0;

  function drawWheel() {
    ctx.clearRect(0, 0, 400, 400);
    flavors.forEach((f, i) => {
      ctx.save();
      ctx.translate(200, 200);
      ctx.rotate(angle + i * 2 * Math.PI / flavors.length);
      ctx.fillStyle = `hsl(${(i * 360 / flavors.length)},70%,60%)`;
      ctx.beginPath();
      ctx.moveTo(0, 0);
      ctx.arc(0, 0, 160, 0, 2 * Math.PI / flavors.length);
      ctx.closePath();
      ctx.fill();
      ctx.fillStyle = '#fff';
      ctx.textAlign = 'center';
      ctx.fillText(f, 80, 0);
      ctx.restore();
    });
  }
  canvas.addEventListener('click', () => {
    angle += 0.3;
    drawWheel();
    document.getElementById('wheelOutput').textContent =
      flavors[Math.floor(((-angle / (2 * Math.PI)) * flavors.length + flavors.length) % flavors.length)];
  });
  drawWheel();
}