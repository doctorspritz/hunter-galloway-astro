window.addEventListener('DOMContentLoaded', () => {
  function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  }

  function PV(rate, nper, pmt) {
    return ((pmt / rate) * (1 - Math.pow(1 + rate, -nper))).toFixed();
  }

  const rentCalculation = (value) => {
    const fiveYearsPrice = parseInt(value) * 52 * 5;
    const mortgagePrice = PV(6.0 / 100 / 12, 360, (52 * parseInt(value)) / 12);

    const weeklyRentResult = document.querySelector('#weekly-rent-result');
    const fiveYearTotalResult = document.querySelector(
      '#five-year-total-result'
    );
    const affordableMortgageResult = document.querySelector(
      '#affordable-mortgage-result'
    );

    if (weeklyRentResult) {
      weeklyRentResult.innerText = numberWithCommas(value);
    }
    
    if (fiveYearTotalResult) {
      fiveYearTotalResult.innerText = numberWithCommas(fiveYearsPrice);
    }

    if (affordableMortgageResult) {
      affordableMortgageResult.innerText = numberWithCommas(mortgagePrice);
    }
  };

  const rentForm = document.getElementById('rent-calc-form');
  const rentInput = document.querySelector('#rent-input');
  const recalcForm = document.getElementById('rent-recalc-form');
  const recalcInput = document.querySelector('#rent-input-recalc');

  const inputStep = document.querySelector('[data-rent="input"');
  const resultStep = document.querySelector('[data-rent="result"');

  new AutoNumeric(rentInput, {
    currencySymbol: '',
    digitGroupSeparator: ',',
    decimalCharacter: '.',
    decimalPlaces: 0,
    allowDecimalPadding: false,
    minimumValue: 1,
    maximumValue: 99999999,
  });

  rentForm?.addEventListener('submit', (event) => {
    event.preventDefault();

    const calcValue = parseInt(rentInput.value.replaceAll(',', ''));

    if (isNaN(calcValue) || calcValue < 1) {
      return;
    }
    recalcInput.value = numberWithCommas(calcValue);
    rentCalculation(calcValue);

    inputStep.style.display = 'none';
    resultStep.style.display = 'block';
  });

  recalcForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    const calcValue = parseInt(recalcInput.value.replaceAll(',', ''));
    rentCalculation(calcValue);
  });

  const readMoreBtns = document.querySelectorAll('[data-button="read-more"]');

  readMoreBtns.forEach((btn) => {
    btn.addEventListener('click', (event) => {
      event.preventDefault();
      const content = event.target.closest('.story-item__content');

      if (content) {
        content.classList.toggle('story-item__content--hidden');
      }
    });
  });
});
