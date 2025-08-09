/* === GO-UP BUTTON === */
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('goUp');

  /* pokazywanie/ukrywanie */
  const toggle = () => {
    btn.classList.toggle('show', window.scrollY > 600);
  };
  window.addEventListener('scroll', toggle);
  toggle(); // pierwsze wywołanie

  /* płynny scroll */
  btn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
});