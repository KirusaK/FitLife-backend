let activityValue = null;
let goalValue = 0;

// ---------- SELECT ----------
document.querySelectorAll('.select').forEach(select => {
  const input = select.querySelector('.select-input');
  const text = select.querySelector('span');
  const options = select.querySelectorAll('li');

  input.addEventListener('click', e => {
    e.stopPropagation();
    closeAllSelects();
    select.classList.toggle('open');
  });

  options.forEach(option => {
    option.addEventListener('click', () => {
      text.textContent = option.textContent;
      select.classList.remove('open');

      if (select.dataset.type === 'activity') {
        activityValue = Number(option.dataset.value);
      }

      if (select.dataset.type === 'goal') {
        goalValue = Number(option.dataset.value);
      }
    });
  });
});

document.addEventListener('click', closeAllSelects);

function closeAllSelects() {
  document.querySelectorAll('.select').forEach(s => s.classList.remove('open'));
}

// ---------- CALCULATOR ----------
document
  .querySelector('.licznik-section__btn')
  .addEventListener('click', () => {
    const weight = Number(document.getElementById('weight').value);
    const height = Number(document.getElementById('height').value);
    const age = Number(document.getElementById('age').value);

    if (!weight || !height || !age || !activityValue) {
      alert('Uzupełnij wszystkie pola');
      return;
    }

    // BMR (bez płci – uśredniony)
    const bmr = 10 * weight + 6.25 * height - 5 * age + 5;

    // TDEE
    let calories = Math.round(bmr * activityValue + goalValue);

    // BZHU
    const protein = Math.round(weight * 2); // białko
    const fat = Math.round((calories * 0.25) / 9); // tłuszcz
    const carbs = Math.round((calories - protein * 4 - fat * 9) / 4);

    // OUTPUT
    document.querySelector('.licznik-section__sum').innerHTML = `
      <div class="kcal-result">
        <h2 class="kcal-result__kcal">${calories} kcal</h2>

        <ul class="kcal-result__list">
          <li>Białko <span>${protein} g</span></li>
          <li>Tłuszcz <span>${fat} g</span></li>
          <li>Węglowodany <span>${carbs} g</span></li>
        </ul>
      </div>
    `;
  });
