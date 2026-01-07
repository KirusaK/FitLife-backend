const userBtn = document.getElementById('userMenuBtn');
const dropdown = document.getElementById('userMenuDropdown');

userBtn.addEventListener('click', () => {
  dropdown.classList.toggle('show');
});

document.addEventListener('click', e => {
  if (!userBtn.contains(e.target) && !dropdown.contains(e.target)) {
    dropdown.classList.remove('show');
  }
});
