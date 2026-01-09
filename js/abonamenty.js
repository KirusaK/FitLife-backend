document.addEventListener('DOMContentLoaded', () => {
  let selectedPlan = null;
  let selectedDuration = null;

  const planButtons = document.querySelectorAll('.price-section__btn');
  const durationButtons = document.querySelectorAll('.dlugosc-section__btn');
  const modal = document.getElementById('abonamentModal');
  const closeModal = document.getElementById('closeAbonamentModal');

  planButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      selectedPlan = btn.dataset.plan;

      planButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      if (!selectedDuration) {
        alert('Najpierw wybierz długość abonamentu');
        return;
      }

      modal.style.display = 'flex';
    });
  });

  durationButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      selectedDuration = btn.dataset.duration;

      durationButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
    });
  });

  closeModal.addEventListener('click', () => {
    modal.style.display = 'none';
  });
});
