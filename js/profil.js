document.addEventListener('DOMContentLoaded', () => {
  const openBtn = document.querySelector('.conto-section__btn');
  const modal = document.getElementById('editModal');
  const closeBtn = document.getElementById('closeModal');
  const form = document.getElementById('modal-editForm');

  if (!openBtn || !modal || !closeBtn || !form) {
    console.error('Modal elements not found');
    return;
  }

  // Открыть модалку
  openBtn.addEventListener('click', () => {
    modal.style.display = 'flex';
  });

  // Закрыть
  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  // Отправка формы
  form.addEventListener('submit', async e => {
    e.preventDefault();

    const formData = new FormData(form);

    try {
      const response = await fetch('/FITLIFE-BACKEND/auth/update-profile.php', {
        method: 'POST',
        body: formData,
      });

      const result = await response.json();

      if (result.success) {
        modal.style.display = 'none';
        location.reload();
      } else {
        alert('Nie udało się zapisać danych');
      }
    } catch (error) {
      console.error(error);
      alert('Błąd serwera');
    }
  });
});
