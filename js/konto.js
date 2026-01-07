document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('userMenuBtn');
  const menu = document.getElementById('userMenuDropdown');

  if (!btn || !menu) return;

  btn.addEventListener('click', () => {
    menu.classList.toggle('active');
  });

  document.addEventListener('click', e => {
    if (!btn.contains(e.target) && !menu.contains(e.target)) {
      menu.classList.remove('active');
    }
  });
});
