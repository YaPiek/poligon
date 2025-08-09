(function(){
  const els = document.querySelectorAll('#lyo-company [data-reveal]');
  if(!('IntersectionObserver' in window) || !els.length) {
    els.forEach(el => el.classList.add('is-visible'));
    return;
  }
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(en=>{
      if(en.isIntersecting){
        en.target.classList.add('is-visible');
        io.unobserve(en.target);
      }
    });
  }, {threshold: .14});
  els.forEach(el=>io.observe(el));
})();
