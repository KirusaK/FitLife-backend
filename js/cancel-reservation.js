document.addEventListener('DOMContentLoaded', () => {
  const cancelButtons = document.querySelectorAll(
    '.zarezerwowane-section__btn',
  );

  cancelButtons.forEach(btn => {
    btn.addEventListener('click', async () => {
      const reservationId = btn.dataset.id;

      if (!confirm('Czy na pewno chcesz anulować rezerwację?')) {
        return;
      }

      try {
        const formData = new FormData();
        formData.append('id', reservationId);

        const response = await fetch(
          '/FITLIFE-BACKEND/auth/cancel-reservation.php',
          {
            method: 'POST',
            body: formData,
          },
        );

        const result = await response.json();

        if (result.success) {
          // удаляем карточку из DOM
          btn.closest('.zarezerwowane-section__item').remove();
        } else {
          alert('Nie udało się anulować rezerwacji');
        }
      } catch (error) {
        console.error(error);
        alert('Błąd serwera');
      }
    });
  });
});
