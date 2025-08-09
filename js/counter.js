function initCounter() {
  const el = document.getElementById('savedCounter');
  if (!el) return;
  const target = 98765;
  gsap.to({ val: 0 }, {
    val: target,
    duration: 3,
    ease: "power2.out",
    onUpdate: function () {
      el.textContent = Math.round(this.targets()[0].val).toLocaleString();
    }
  });
}