document.addEventListener('DOMContentLoaded', () => {
  console.log('rezerwacja.js loaded');

  let selectedService = null;

  const serviceButtons = document.querySelectorAll('.uslugiWybor-section__btn');
  const dateInput = document.getElementById('reservationDate');
  const timeInput = document.getElementById('reservationTime');
  const reserveBtn = document.querySelector('.data-section__button');
  const hiddenInput = document.getElementById('selectedService');

  console.log('serviceButtons:', serviceButtons.length);

  if (!reserveBtn) {
    console.error('Nie znaleziono przycisku rezerwacji');
    return;
  }

  serviceButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      serviceButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      selectedService = btn.dataset.service;
      hiddenInput.value = selectedService;

      console.log('Wybrano usługę:', selectedService);
    });
  });

  reserveBtn.addEventListener('click', async () => {
    console.log('Kliknięto rezerwuj');

    if (!selectedService) {
      alert('Wybierz usługę');
      return;
    }

    if (!dateInput.value || !timeInput.value) {
      alert('Wybierz datę i godzinę');
      return;
    }

    const formData = new FormData();
    formData.append('service', selectedService);
    formData.append('date', dateInput.value);
    formData.append('time', timeInput.value);

    const res = await fetch('/FITLIFE-BACKEND/auth/create-reservation.php', {
      method: 'POST',
      body: formData,
    });

    const data = await res.json();

    if (data.success) {
      alert('Rezerwacja potwierdzona');
      window.location.href = '/FITLIFE-BACKEND/pages/profil.php';
    } else {
      alert(data.message);
    }
  });
});
