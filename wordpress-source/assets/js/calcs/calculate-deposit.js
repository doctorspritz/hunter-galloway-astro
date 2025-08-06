const calculatorBtn = document.querySelector('#dp-entry-calculate');
const depositSpan = document.getElementById('dp-form-deposit');
const calculators = document.querySelectorAll(
  '#hc_deposit_calculator, #hc_deposit_calculator_custom'
);

let syncing = false;

// Deposit options (from ACF fields)
const {
  deposit_minimum_value: depositMinimumValue = 1,
  deposit_maximum_value: depositMaximumValue = 9999999999999,
  rate_minimum_value: rateMinimumValue = 0,
  rate_maximum_value: rateMaximumValue = 100,
  term_minimum_value: termMinimumValue = 0,
  term_maximum_value: termMaximumValue = 30,
  result_modification: resultModification = {},
  deposit_amount_default_value: depositDefaultValue = 5,
} = depositOptions || {};

const {
  monthy_payment_options: monthlyPaymentOptions = {},
  home_price_options: homePriceOptions = {},
} = resultModification;

// Define clearly named variables for monthly payment modification based on ACF values
const isMonthlyCoefficient = monthlyPaymentOptions.is_coefficient === true;
const monthlyMathOperation = monthlyPaymentOptions.mathematical_operation || '';
const monthlyCoefficientValue =
  parseFloat(monthlyPaymentOptions.coefficient_value) || 0;

// Define clearly named variables for home price modification based on ACF values
const isHomePriceCoefficient = homePriceOptions.is_coefficient === true;
const homePriceMathOperation = homePriceOptions.mathematical_operation || '';
const homePriceCoefficientValue =
  parseFloat(homePriceOptions.coefficient_value) || 0;

calculators.forEach((calculator, index) => {
  const slider = calculator.querySelector('#hc_down_slider');
  const inputs = calculator.querySelectorAll('input');
  const depositInput = calculator.querySelector('#hcdc_deposit');
  const rateInput = calculator.querySelector('#hcdc_rate');
  const termInput = calculator.querySelector('#hcdc_term');
  noUiSlider.create(slider, {
    start: [depositDefaultValue],
    step: 1,
    animate: true,
    connect: [!0, !1],
    tooltips: true,
    range: {
      min: [5],
      max: [50],
    },
    format: wNumb({
      suffix: '%',
      decimals: 0,
      mark: '.',
      thousand: ',',
    }),
  });
  const deposit = new AutoNumeric(depositInput, {
    currencySymbol: '',
    digitGroupSeparator: ',',
    decimalCharacter: '.',
    decimalPlaces: 0,
    allowDecimalPadding: false,
    minimumValue: +depositMinimumValue,
    maximumValue: +depositMaximumValue,
  });
  const rate = new AutoNumeric(rateInput, {
    currencySymbol: '',
    digitGroupSeparator: ',',
    decimalCharacter: '.',
    decimalPlaces: 2,
    minimumValue: +rateMinimumValue,
    maximumValue: +rateMaximumValue,
  });
  const term = new AutoNumeric(termInput, {
    currencySymbol: '',
    digitGroupSeparator: ',',
    decimalCharacter: '.',
    allowDecimalPadding: false,
    decimalPlaces: 0,
    minimumValue: +termMinimumValue,
    maximumValue: +termMaximumValue,
  });
  hc_calculateDeposit(calculator, deposit, rate, term);
  inputs.forEach((input) => {
    input.addEventListener('input', function () {
      hc_calculateDeposit(calculator, deposit, rate, term);
    });
    input.addEventListener('calcSync', function () {
      hc_calculateDeposit(calculator, deposit, rate, term);
    });
  });
  const slider2 =
    calculators[index === 0 ? 1 : 0].querySelector('#hc_down_slider');

  const syncSlider = throttle(function (values, handle) {
    if (slider2 && slider2.noUiSlider) {
      syncing = true;
      slider2.noUiSlider.set(values, handle);
      syncing = false;
    }
  }, 100);

  slider?.noUiSlider.on('update', function (values, handle) {
    hc_calculateDeposit(calculator, deposit, rate, term);

    if (!syncing && slider2 && slider2?.noUiSlider) {
      syncSlider(values, handle);
    }
  });

  slider2?.noUiSlider?.on('update', function (values, handle) {
    if (!syncing && slider && slider.noUiSlider) {
      syncing = true;
      slider.noUiSlider.set(values, handle);
      syncing = false;
    }
  });
});

function setupSyncForInputs(selector) {
  const inputs = document.querySelectorAll(selector);
  const syncEvent = new CustomEvent('calcSync', {
    bubbles: true,
  });

  inputs.forEach((input, idx) => {
    input.addEventListener('input', function () {
      setTimeout(() => {
        inputs.forEach((otherInput, otherIdx) => {
          if (otherIdx !== idx) {
            otherInput.value = input.value;
            const autoNumericInstance =
              AutoNumeric.getAutoNumericElement(otherInput);
            if (autoNumericInstance) {
              autoNumericInstance.set(input.value);
            }
            otherInput.dispatchEvent(syncEvent);
          }
        });
      }, 1000);

      if (input.id === 'hcdc_deposit') {
        depositSpan.innerHTML = '$' + input.value;
      }
    });
  });
}

setupSyncForInputs('#hcdc_deposit');
setupSyncForInputs('#hcdc_rate');
setupSyncForInputs('#hcdc_term');

if (calculatorBtn) {
  const step1 = document.querySelector('.dp-calculator__step[data-step="1"]');
  const step2 = document.querySelector('.dp-calculator__step[data-step="2"]');

  calculatorBtn.addEventListener('click', (event) => {
    const depositInput = document.getElementById('entry-deposit');
    const errorContainer = document.querySelector('#dp-entry__error');
    if (!depositInput) return;
    const depositValue = depositInput.value;

    if (
      !depositValue.trim() === '' ||
      depositValue.trim() === '0' ||
      depositValue < depositMinimumValue
    ) {
      depositInput.focus();
      const errorMessage =
        'Deposit amount must be at least $' + depositMinimumValue;
      errorContainer.innerHTML = errorMessage;
      return;
    }
    if (depositValue > depositMaximumValue) {
      depositInput.focus();
      const errorMessage =
        'Deposit amount must be less than $' + depositMaximumValue;
      errorContainer.innerHTML = errorMessage;
      return;
    }
    const calcDepositInputs = document.querySelectorAll('#hcdc_deposit');

    calcDepositInputs.forEach((input) => {
      input.value = depositInput.value;
      const autoNumericInstance = AutoNumeric.getAutoNumericElement(input);
      if (autoNumericInstance) {
        autoNumericInstance.set(depositInput.value);
      }
      input.dispatchEvent(new CustomEvent('calcSync', { bubbles: true }));
    });

    if (depositSpan) {
      depositSpan.innerHTML = '$' + depositValue;
    }
    step1.style.display = 'none';
    step2.style.display = 'block';
    errorContainer.innerHTML = '';
    const footerBtn = document.querySelector('.footer_button a');

    if (footerBtn) {
      footerBtn.addEventListener('click', (event) => {
        event.preventDefault();
        footerBtn.classList.remove('rc_open', 'pum-trigger');
        const assessmentForm = document.querySelector('.dp-form__right-inner');
        if (assessmentForm) {
          assessmentForm.scrollIntoView({
            behavior: 'smooth',
          });
        }
      });
    }
  });
}

function hc_calculateDeposit(calculator, deposit, rate, term) {
  const homePriceContainer = calculator.querySelector('#hcdc_home_price');
  const monthlyPaymentContainer =
    calculator.querySelector('#hcdc_mnth_payment');
  const slider = calculator.querySelector('#hc_down_slider');
  if (!deposit || !rate || !term) return;

  // Parse input values
  const calcValues = {
    depositAmount: parseFloat(deposit?.getNumericString()),
    annualRate: parseFloat(rate?.getNumericString()) / 100,
    termYears: parseFloat(term?.getNumericString()),
    downPaymentPercent: parseFloat(slider.noUiSlider.get()) / 100,
  };

  // Calculate home price and multiply by 10 to scale up to desired value.
  // For example, if depositAmount / downPaymentPercent is 250,000, multiplying by 10 gives 2,500,000.
  calcValues.homePrice =
    calcValues.depositAmount / calcValues.downPaymentPercent;

  // Apply ACF settings for home price modification
  if (
    isHomePriceCoefficient &&
    homePriceCoefficientValue &&
    homePriceMathOperation !== 0
  ) {
    if (homePriceMathOperation === 'addition') {
      calcValues.homePrice += homePriceCoefficientValue;
    } else if (homePriceMathOperation === 'subtraction') {
      calcValues.homePrice -= homePriceCoefficientValue;
    } else if (homePriceMathOperation === 'multiplication') {
      calcValues.homePrice *= homePriceCoefficientValue;
    } else if (homePriceMathOperation === 'division') {
      calcValues.homePrice /= homePriceCoefficientValue;
    }
  }

  // Calculate the monthly payment, scaled up by 10 as well.
  // PMT function returns a negative value, so we invert it.
  calcValues.monthlyPayment = -PMT(
    calcValues.annualRate / 12,
    12 * calcValues.termYears,
    calcValues.homePrice - calcValues.depositAmount
  );

  // Apply ACF settings for monthly payment modification
  if (
    isMonthlyCoefficient &&
    monthlyCoefficientValue &&
    monthlyMathOperation !== 0
  ) {
    if (monthlyMathOperation === 'addition') {
      calcValues.monthlyPayment += monthlyCoefficientValue;
    } else if (monthlyMathOperation === 'subtraction') {
      calcValues.monthlyPayment -= monthlyCoefficientValue;
    } else if (monthlyMathOperation === 'multiplication') {
      calcValues.monthlyPayment *= monthlyCoefficientValue;
    } else if (monthlyMathOperation === 'division') {
      calcValues.monthlyPayment /= monthlyCoefficientValue;
    }
  }

  // Update the DOM elements with formatted values.
  const formattedValues = {
    homePrice: formatMoney(calcValues.homePrice, 0),
    monthlyPayment: formatMoney(calcValues.monthlyPayment),
  };

  homePriceContainer.innerHTML = '$' + formattedValues.homePrice;
  const homePriceLength = formattedValues.homePrice.toString().length;

  monthlyPaymentContainer.innerHTML = '$' + formattedValues.monthlyPayment;
  const monthlyPaymentLength = formattedValues.monthlyPayment.toString().length;

  const resultContainer = calculator.querySelector('.dp-result__outcome');
  if (resultContainer) {
    if (homePriceLength > 7 || monthlyPaymentLength > 7) {
      resultContainer.dataset.valueLength = 'l';
    }
    if (homePriceLength > 12 || monthlyPaymentLength > 12) {
      resultContainer.dataset.valueLength = 'xl';
    }
    if (homePriceLength > 16 || monthlyPaymentLength > 16) {
      resultContainer.dataset.valueLength = 'xxl';
    }
  }
}

function throttle(func, limit) {
  let waiting = false;
  return function (...args) {
    if (!waiting) {
      func.apply(this, args);
      waiting = true;
      setTimeout(() => {
        waiting = false;
      }, limit);
    }
  };
}

function PMT(
  interestRate,
  numPeriods,
  presentValue,
  futureValue,
  paymentTiming
) {
  let payment;

  futureValue = futureValue || 0;
  paymentTiming = paymentTiming || 0;

  if (interestRate === 0) {
    payment = (presentValue + futureValue) / numPeriods;
  } else {
    const compoundFactor = Math.pow(1 + interestRate, numPeriods);
    if (paymentTiming === 1) {
      payment =
        ((futureValue * interestRate) / (compoundFactor - 1) +
          (presentValue * interestRate) / (1 - 1 / compoundFactor)) /
        (1 + interestRate);
    } else {
      payment =
        (futureValue * interestRate) / (compoundFactor - 1) +
        (presentValue * interestRate) / (1 - 1 / compoundFactor);
    }
  }
  return -payment;
}

function formatMoney(value, decimals = 2, decPoint = '.', thousandsSep = ',') {
  decimals = isNaN((decimals = Math.abs(decimals))) ? 2 : decimals;

  const sign = value < 0 ? '-' : '';
  const fixedNumberString = Math.abs(+value || 0).toFixed(decimals);
  const integerPart = parseInt(fixedNumberString, 10) + '';
  const firstGroupLength = integerPart.length > 3 ? integerPart.length % 3 : 0;

  const formattedInteger =
    (firstGroupLength
      ? integerPart.substr(0, firstGroupLength) + thousandsSep
      : '') +
    integerPart
      .substr(firstGroupLength)
      .replace(/(\d{3})(?=\d)/g, '$1' + thousandsSep);

  const decimalPart = decimals
    ? decPoint +
      (Number(fixedNumberString) - parseInt(integerPart, 10))
        .toFixed(decimals)
        .slice(2)
    : '';

  return sign + formattedInteger + decimalPart;
}
