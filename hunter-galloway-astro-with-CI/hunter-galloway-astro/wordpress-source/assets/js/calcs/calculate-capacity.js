const resultForm = document.querySelector('.result-form');
const stepOne = resultForm.querySelector('[data-step="1"]');
const stepTwo = resultForm.querySelector('[data-step="2"]');
const inputs = stepOne.querySelectorAll('input[type="radio"]');

const backBtn = document.querySelector('.main-form__back');
inputs.forEach((input) => {
  input.addEventListener('change', (e) => {
    const target = e.target;

    if (!target) return;
    const value = target?.value;
    target.closest('label').dataset.checked = true;

    if (!value) return;

    const select = resultForm.querySelector('select[name="transaction_type"]');
    select.value = value;
    select.dispatchEvent(new Event('change'));

    stepOne.style.display = 'none';
    stepTwo.style.display = 'block';
    target.checked = false;
  });
});

backBtn.addEventListener('click', () => {
  stepOne.style.display = 'block';
  stepTwo.style.display = 'none';
});

//

const typBlockOne = document.querySelector('.result-typ_one');
const typBlockTwoBuild = document.querySelector(
  '.result-typ_two[data-result-type="build"]'
);
const typBlockTwoCommercial = document.querySelector(
  '.result-typ_two[data-result-type="commercial"]'
);

const footerResult = document.querySelector('.result_footer');
const form = document.querySelector('.result-form');
const result_get = document.querySelector('.result_get');
const result_icons = document.querySelector('.result-wrapper_icons');

document
  .querySelectorAll('.form-wrapper .form input, .form-wrapper .form select')
  .forEach((item) => {
    item.addEventListener('input', (e) => {
      if (item.closest('.input-wrapper.validation-failed')) {
        item
          .closest('.input-wrapper.validation-failed')
          .classList.remove('validation-failed');
      }
    });
  });

document.querySelectorAll('.result-typ .main-form__back').forEach((btn) => {
  btn.addEventListener('click', () => {
    typBlockOne.style = '';
    typBlockTwoBuild.style = '';
    typBlockTwoCommercial.style = '';
    footerResult.style = '';
    form.style = '';
    stepOne.style.display = 'block';
    stepTwo.style.display = 'none';
    if (isMobile) {
      result_get.style = '';
      result_icons.style = '';
    }

    document
      .querySelector('.wpcf7-form.not-error')
      ?.classList.remove('not-error');

    jQuery(function ($) {
      $('html, body').animate(
        {
          scrollTop: $('.result-wrapper').offset().top - (isMobile ? 71 : 0),
        },
        250
      );
    });
  });
});

function sentForm() {
  if (form.querySelector('select').value == 'Commercial Or Business Loan') {
    typBlockTwoCommercial.style.display = 'block';

    footerResult.style.display = 'none';
  } else {
    typBlockOne.style.display = 'block';
  }
  form.style.display = 'none';

  if (isMobile) {
    result_get.style.display = 'none';
    result_icons.style.display = 'none';
  }

  jQuery(function ($) {
    $('html, body').animate(
      {
        scrollTop: $('.result-wrapper').offset().top - (isMobile ? 71 : 0),
      },
      250
    );
  });

  document.querySelector('.btn_recalculate').disabled = false;
}

document.addEventListener(
  'wpcf7mailsent',
  function (event) {
    if (event.detail.contactFormId == 68942) {
      sentForm();
    }
  },
  false
);

document
  .querySelector('.result-form select[name="transaction_type"]')
  .addEventListener('change', (e) => {
    let target = e.target;
    if (target.value == 'Commercial Or Business Loan') {
      sentForm();
      target.value = '';
    }
  });

document.addEventListener('wpcf7mailfailed', function (event) {
  document.querySelector('.btn_recalculate').disabled = false;
});

document
  .querySelector('.result-form form.wpcf7-form .wpcf7-submit')
  .addEventListener('click', () => {
    document.querySelector('.btn_recalculate').disabled = true;
  });

document.querySelector('.result-form form.wpcf7-form').addEventListener(
  'submit',
  function (event) {
    var formTarget = event.target;
    var nameField = formTarget.querySelector('input[name="text-name"]');
    var emailField = formTarget.querySelector('input[name="text-email"]');
    var phoneField = formTarget.querySelector('input[name="text-phone"]');
    var selectField = formTarget.querySelector(
      'select[name="transaction_type"]'
    );

    var errorMessages = {};

    if (!nameField.value.trim()) {
      errorMessages['text-name'] = 'Please enter your name.';
    }
    if (!selectField.value.trim()) {
      errorMessages['transaction_type'] = 'Please choose an option.';
    }

    if (!emailField.value.trim()) {
      errorMessages['text-email'] = 'Please enter a valid email address.';
    } else {
      var emailRegex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
      if (!emailRegex.test(emailField.value.trim())) {
        errorMessages['text-email'] = 'Please enter a valid email address. ';
      }
    }

    if (!phoneField.value.trim()) {
      errorMessages['text-phone'] = 'Please enter your phone number.';
    } else {
      var phoneRegex = /^(04\d{2}\s\d{3}\s\d{3}|\d{2}\s\d{4}\s\d{4})$/;
      if (!phoneRegex.test(phoneField.value.trim())) {
        errorMessages['text-phone'] = 'Please enter a valid phone number.';
      }
    }

    // Remove existing error messages
    var existingErrorTips = document.querySelectorAll('.not-valid-tip');

    existingErrorTips.forEach(function (errorTip) {
      errorTip.remove();
    });

    // Create new error messages
    Object.keys(errorMessages).forEach(function (fieldName) {
      var field = formTarget.querySelector(
        '.wpcf7-form-control-wrap [name="' + fieldName + '"]'
      );
      var errorTip = document.createElement('span');
      errorTip.classList.add('not-valid-tip');
      errorTip.textContent = errorMessages[fieldName];
      field.insertAdjacentElement('afterend', errorTip);
    });

    // If there are no error messages, proceed with form submission
    if (Object.keys(errorMessages).length === 0) {
      console.log('is typ');

      formTarget.classList.add('not-error');
    } else {
      event.preventDefault();
      event.stopImmediatePropagation(); // Prevent form submission

      formTarget.classList.remove('not-error');

      console.log('not typ');
      document.querySelector('.btn_recalculate').disabled = false;
      formTarget.querySelector('.wpcf7-submit').style = '';
    }

    // }
  },
  false
);

var phoneInput = document.querySelector(
  '.result-form input[name="text-phone"]'
);

let value = '';
phoneInput.addEventListener('input', function (event) {
  var input = event.target;
  if (input.value.length <= 12) {
    var formattedPhoneNumber = formatPhoneNumber(input.value);
    input.value = formattedPhoneNumber;
    value = formattedPhoneNumber;
  } else {
    input.value = value;
  }
});

phoneInput.addEventListener('keydown', function (event) {
  var key = event.key;
  var selectionStart = phoneInput.selectionStart;
  var selectionEnd = phoneInput.selectionEnd;
  var value = phoneInput.value;

  if (key === 'Backspace' || key === 'Delete') {
    // If Backspace or Delete is pressed, remove the previous or next character respectively
    if (key === 'Backspace' && selectionStart > 0) {
      phoneInput.value =
        value.slice(0, selectionStart - 1) + value.slice(selectionEnd);
      phoneInput.setSelectionRange(selectionStart - 1, selectionStart - 1);
    } else if (key === 'Delete' && selectionEnd < value.length) {
      phoneInput.value =
        value.slice(0, selectionStart) + value.slice(selectionEnd + 1);
      phoneInput.setSelectionRange(selectionStart, selectionStart);
    }
    event.preventDefault(); // Prevent default behavior (e.g., removing entire value)
  }
});

window.addEventListener('scroll', () => {
  const formWrapperRes = document.querySelector('.result-wrapper_block');
  const btnYellow = document.querySelector('.result-form .btn_yellow');

  const formWrapper = document.querySelector('.form-wrapper');
  const btnformWrapper = document.querySelector('.calculate-action');

  if (btnYellow && formWrapper && isMobile) {
    const formWrapperResRect = formWrapperRes.getBoundingClientRect();
    const btnYellowRect = btnYellow.getBoundingClientRect();

    const formWrapperRect = formWrapper.getBoundingClientRect();
    const btnformWrapperRect = btnformWrapper.getBoundingClientRect();

    const windowHeight =
      window.innerHeight || document.documentElement.clientHeight;

    if (
      (formWrapperResRect.top < windowHeight && btnYellowRect.bottom > 75) ||
      (formWrapperRect.top < windowHeight && btnformWrapperRect.bottom > 75)
    ) {
      document.querySelector('.footer_button').hidden = true;
    } else {
      document.querySelector('.footer_button').hidden = false;
    }
  }
});

//
document
  .querySelector('div[data-field-name="income"] input')
  .addEventListener('input', (e) => {
    e.target.value = addCommas(e.target.value.split(',').join(''));
  });
document
  .querySelector('div[data-field-name="deposit"] input')
  .addEventListener('input', (e) => {
    e.target.value = addCommas(e.target.value.split(',').join(''));
  });

// Calculator
let business_logic = {
  src_constants: {
    fhogs: {
      NSW: {
        fhog: 10000,
        fhog_max_pp: 550000,
      },
      VIC: {
        fhog: 10000,
        fhog_max_pp: 750000,
      },
      QLD: {
        fhog: 20000,
        fhog_max_pp: 750000,
      },
      ACT: {
        fhog: 7000,
        fhog_max_pp: 750000,
      },
      WA: {
        fhog: 10000,
        fhog_max_pp: 750000,
      },
      SA: {
        fhog: 15000,
        fhog_max_pp: 570000,
      },
      TAS: {
        fhog: 20000,
        fhog_max_pp: 99999999,
      },
      NT: {
        fhog: 26000,
        fhog_max_pp: 99999999,
      },
    },
    tax_rates: [
      {
        from: 0,
        to: 18200,
        upfront: 0,
        persent: 0.0,
      },
      {
        from: 18201,
        to: 37000,
        upfront: 0,
        persent: 0.19,
      },
      {
        from: 37001,
        to: 87000,
        upfront: 3572,
        persent: 0.325,
      },
      {
        from: 87001,
        to: 180000,
        upfront: 19822,
        persent: 0.37,
      },
      {
        from: 180001,
        to: 9999999999999,
        upfront: 54232,
        persent: 0.45,
      },
    ],
    hem_income_ranges: {
      3: {
        from: 0,
        to: 23603,
      },
      4: {
        from: 23603,
        to: 29504,
      },
      5: {
        from: 29504,
        to: 35405,
      },
      6: {
        from: 35405,
        to: 41306,
      },
      7: {
        from: 41306,
        to: 47207,
      },
      8: {
        from: 47207,
        to: 53108,
      },
      9: {
        from: 53108,
        to: 59009,
      },
      10: {
        from: 59009,
        to: 70810,
      },
      11: {
        from: 70810,
        to: 82612,
      },
      12: {
        from: 82612,
        to: 94414,
      },
      13: {
        from: 94414,
        to: 106215,
      },
      14: {
        from: 106215,
        to: 118017,
      },
      15: {
        from: 118017,
        to: 141620,
      },
      16: {
        from: 141620,
        to: 165224,
      },
      17: {
        from: 165224,
        to: 188827,
      },
      18: {
        from: 188827,
        to: 236034,
      },
      19: {
        from: 236034,
        to: 9999999999,
      },
    },
    hem_values: {
      3: {
        3: 1692,
        4: 1692,
        5: 1692,
        6: 1692,
        7: 1765,
        8: 1941,
        9: 1993,
        10: 2045,
        11: 2175,
        12: 2304,
        13: 2390,
        14: 2475,
        15: 2503,
        16: 2531,
        17: 2564,
        18: 2656,
        19: 2856,
      },
      6: {
        3: 1908,
        4: 1908,
        5: 1908,
        6: 1908,
        7: 1981,
        8: 2157,
        9: 2209,
        10: 2261,
        11: 2391,
        12: 2520,
        13: 2606,
        14: 2691,
        15: 2719,
        16: 2747,
        17: 2780,
        18: 2872,
        19: 3072,
      },
      21: {
        3: 2365,
        4: 2365,
        5: 2365,
        6: 2365,
        7: 2438,
        8: 2614,
        9: 2666,
        10: 2718,
        11: 2848,
        12: 2977,
        13: 3063,
        14: 3148,
        15: 3176,
        16: 3204,
        17: 3237,
        18: 3329,
        19: 3529,
      },
      33: {
        3: 2642,
        4: 2642,
        5: 2642,
        6: 2642,
        7: 2715,
        8: 2891,
        9: 2943,
        10: 2995,
        11: 3125,
        12: 3254,
        13: 3340,
        14: 3425,
        15: 3453,
        16: 3481,
        17: 3514,
        18: 3606,
        19: 3806,
      },
      5: {
        3: 1127,
        4: 1193,
        5: 1171,
        6: 1202,
        7: 1307,
        8: 1381,
        9: 1503,
        10: 1486,
        11: 1656,
        12: 1814,
        13: 1849,
        14: 1918,
        15: 2141,
        16: 2233,
        17: 2360,
        18: 2482,
        19: 3229,
      },
      10: {
        3: 1398,
        4: 1464,
        5: 1442,
        6: 1473,
        7: 1578,
        8: 1652,
        9: 1779,
        10: 1757,
        11: 1932,
        12: 2089,
        13: 2124,
        14: 2194,
        15: 2417,
        16: 2508,
        17: 2635,
        18: 2757,
        19: 3509,
      },
      35: {
        3: 1726,
        4: 1792,
        5: 1770,
        6: 1800,
        7: 1905,
        8: 1975,
        9: 2102,
        10: 2080,
        11: 2255,
        12: 2412,
        13: 2447,
        14: 2513,
        15: 2736,
        16: 2827,
        17: 2954,
        18: 3076,
        19: 3819,
      },
      55: {
        3: 1875,
        4: 1940,
        5: 1918,
        6: 1945,
        7: 2050,
        8: 2124,
        9: 2251,
        10: 2229,
        11: 2399,
        12: 2556,
        13: 2591,
        14: 2661,
        15: 2884,
        16: 2976,
        17: 3103,
        18: 3225,
        19: 3968,
      },
    },
    stamps: {
      NT: {
        fhog: 26000,
        duty_rates: [
          {
            from: 0,
            to: 100000,
            upfront: 0,
            threshold: 0,
            percent: 0.0183,
          },
          {
            from: 100001,
            to: 200000,
            upfront: 0,
            threshold: 0,
            percent: 0.0216,
          },
          {
            from: 200001,
            to: 300000,
            upfront: 0,
            threshold: 0,
            percent: 0.0281,
          },
          {
            from: 300001,
            to: 400000,
            upfront: 0,
            threshold: 0,
            percent: 0.0347,
          },
          {
            from: 400001,
            to: 525000,
            upfront: 0,
            threshold: 0,
            percent: 0.0413,
          },
          {
            from: 525001,
            to: 2999999,
            upfront: 0,
            threshold: 0,
            percent: 0.0495,
          },
          {
            from: 3000000,
            to: 4999999,
            upfront: 0,
            threshold: 0,
            percent: 0.0575,
          },
          {
            from: 5000000,
            to: 999999999,
            upfront: 0,
            threshold: 0,
            percent: 0.0425,
          },
        ],
        // fho_duty_rates not used
      },
      TAS: {
        fhog: 20000,
        duty_rates: [
          {
            from: 0,
            to: 75000,
            upfront: 435,
            threshold: 25000,
            percent: 0.0225,
          },
          {
            from: 75001,
            to: 200000,
            upfront: 1560,
            threshold: 75000,
            percent: 0.035,
          },
          {
            from: 200001,
            to: 375000,
            upfront: 5935,
            threshold: 200000,
            percent: 0.04,
          },
          {
            from: 375001,
            to: 725000,
            upfront: 12935,
            threshold: 375000,
            percent: 0.0425,
          },
          {
            from: 725001,
            to: 999999999,
            upfront: 27810,
            threshold: 725000,
            percent: 0.045,
          },
        ],
        // fho_duty_rates not used
      },
      NSW: {
        fhog: 10000,
        max_pp_fhog: 550000,
        fhog_workings_enable: true,
        fhog_workings_by_5_persent: true,
        duty_rates: [
          {
            from: 0,
            to: 14000,
            upfront: 0,
            threshold: 0,
            percent: 0.0125,
          },
          {
            from: 14001,
            to: 30000,
            upfront: 175,
            threshold: 14000,
            percent: 0.015,
          },
          {
            from: 30001,
            to: 80000,
            upfront: 415,
            threshold: 30000,
            percent: 0.0175,
          },
          {
            from: 80001,
            to: 300000,
            upfront: 1290,
            threshold: 80000,
            percent: 0.035,
          },
          {
            from: 300001,
            to: 1000000,
            upfront: 8890,
            threshold: 300000,
            percent: 0.045,
          },
          {
            from: 1000001,
            to: 3000000,
            upfront: 40490,
            threshold: 1000000,
            percent: 0.055,
          },
          {
            from: 3000001,
            to: 999999999,
            upfront: 150490,
            threshold: 3000000,
            percent: 0.07,
          },
        ],
        fho_duty_rates: [
          {
            from: 0,
            to: 650000,
            upfront: 0,
            threshold: 0,
            percent: 0,
          },
          {
            from: 650000,
            to: 1000000,
            upfront: 8890,
            threshold: 300000,
            percent: 0.045,
          },
          {
            from: 1000001,
            to: 3000000,
            upfront: 40490,
            threshold: 1000000,
            percent: 0.055,
          },
          {
            from: 3000001,
            to: 999999999,
            upfront: 150490,
            threshold: 3000000,
            percent: 0.07,
          },
        ],
      },
      VIC: {
        fhog: 10000,
        max_pp_fhog: 750000,
        fhog_workings_enable: true,
        fhog_workings_by_5_persent: false,
        use_total_for_costs_at_max: true,
        duty_rates: [
          {
            from: 0,
            to: 25000,
            upfront: 0,
            threshold: 0,
            percent: 0.014,
          },
          {
            from: 25001,
            to: 130000,
            upfront: 350,
            threshold: 25000,
            percent: 0.024,
          },
          {
            from: 130001,
            to: 960000,
            upfront: 2870,
            threshold: 130000,
            percent: 0.06,
          },
          {
            from: 960001,
            to: 999999999,
            upfront: 0,
            threshold: 0,
            percent: 0.055,
          },
        ],
        fho_duty_rates: [
          {
            from: 750000,
            to: 960000,
            upfront: 2870,
            threshold: 130000,
            percent: 0.06,
          },
          {
            from: 960001,
            to: 999999999,
            upfront: 0,
            threshold: 0,
            percent: 0.055,
          },
        ],
        stamp_calc_fho_exceptions: {
          600000: 0,
          610000: 2111,
          620000: 4302,
          630000: 6574,
          640000: 8925,
          650000: 11356,
          660000: 13868,
          670000: 16500,
          680000: 19200,
          690000: 21800,
          700000: 24700,
          710000: 27700,
          720000: 30600,
          730000: 33700,
          740000: 36800,
          750000: 40100,
        },
      },
      QLD: {
        fhog: 20000,
        max_pp_fhog: 750000,
        fhog_workings_enable: true,
        fhog_workings_by_5_persent: false,
        use_total_for_costs_at_max: true,
        duty_rates: [
          {
            from: 0,
            to: 350000,
            upfront: 0,
            threshold: 0,
            percent: 0.01,
          },
          {
            from: 350001,
            to: 540000,
            upfront: 3500,
            threshold: 350000,
            percent: 0.035,
          },
          {
            from: 540001,
            to: 1000000,
            upfront: 10150,
            threshold: 540000,
            percent: 0.045,
          },
          {
            from: 1000001,
            to: 999999999,
            upfront: 30850,
            threshold: 1000000,
            percent: 0.0575,
          },
        ],
        // fho_duty_rates not used
        fhog_concession: [
          {
            from: 0,
            to: 504999.99,
            concession: 8750,
          },
          {
            from: 505000,
            to: 509999.99,
            concession: 7875,
          },
          {
            from: 510000,
            to: 514999.99,
            concession: 7000,
          },
          {
            from: 515000,
            to: 519999.99,
            concession: 6125,
          },
          {
            from: 520000,
            to: 524999.99,
            concession: 5250,
          },
          {
            from: 525000,
            to: 529999.99,
            concession: 4375,
          },
          {
            from: 530000,
            to: 534999.99,
            concession: 3500,
          },
          {
            from: 535000,
            to: 539999.99,
            concession: 2625,
          },
          {
            from: 540000,
            to: 544999.99,
            concession: 1750,
          },
          {
            from: 545000,
            to: 549999.99,
            concession: 875,
          },
        ],
      },
      ACT: {
        fhog: 7000,
        max_pp_fhog: 750000,
        fhog_workings_enable: true,
        fhog_workings_by_5_persent: false,
        duty_rates: [
          {
            from: 0,
            to: 200000,
            upfront: 0,
            threshold: 0,
            percent: 0.0148,
          },
          {
            from: 200001,
            to: 300000,
            upfront: 2960,
            threshold: 200000,
            percent: 0.025,
          },
          {
            from: 300001,
            to: 500000,
            upfront: 5460,
            threshold: 300000,
            percent: 0.04,
          },
          {
            from: 500001,
            to: 750000,
            upfront: 13460,
            threshold: 500000,
            percent: 0.05,
          },
          {
            from: 750001,
            to: 1000000,
            upfront: 25960,
            threshold: 750000,
            percent: 0.065,
          },
          {
            from: 1000001,
            to: 1454999,
            upfront: 42210,
            threshold: 1000000,
            percent: 0.07,
          },
          {
            from: 1455000,
            to: 999999999,
            upfront: 0,
            threshold: 0,
            percent: 0.0509,
          },
        ],
        fho_duty_rates: [
          {
            from: 0,
            to: 470000,
            upfront: 0,
            threshold: 0,
            percent: 0,
          },
          {
            from: 470001,
            to: 607000,
            upfront: 0,
            threshold: 470000,
            percent: 0.135,
          },
          {
            from: 607001,
            to: 750000,
            upfront: 13460,
            threshold: 500000,
            percent: 0.05,
          },
          {
            from: 750001,
            to: 1000000,
            upfront: 25960,
            threshold: 750000,
            percent: 0.065,
          },
          {
            from: 1000001,
            to: 1454999,
            upfront: 42210,
            threshold: 1000000,
            percent: 0.07,
          },
          {
            from: 1455000,
            to: 999999999,
            upfront: 0,
            threshold: 0,
            percent: 0.0509,
          },
        ],
      },
      WA: {
        fhog: 10000,
        max_pp_fhog: 750000,
        fhog_workings_enable: true,
        fhog_workings_by_5_persent: false,
        duty_rates: [
          {
            from: 0,
            to: 80000,
            upfront: 0,
            threshold: 0,
            percent: 0.019,
          },
          {
            from: 80001,
            to: 100000,
            upfront: 1520,
            threshold: 80000,
            percent: 0.0285,
          },
          {
            from: 100001,
            to: 250000,
            upfront: 2090,
            threshold: 100000,
            percent: 0.038,
          },
          {
            from: 250001,
            to: 500000,
            upfront: 7790,
            threshold: 250000,
            percent: 0.0475,
          },
          {
            from: 500001,
            to: 999999999,
            upfront: 19665,
            threshold: 500000,
            percent: 0.0515,
          },
        ],
        fho_duty_rates: [
          {
            from: 0,
            to: 430000,
            upfront: 0,
            threshold: 0,
            percent: 0,
          },
          {
            from: 430001,
            to: 530000,
            upfront: 0,
            threshold: 430000,
            percent: 0.1919,
          },
          {
            from: 530001,
            to: 999999999,
            upfront: 19665,
            threshold: 500000,
            percent: 0.0515,
          },
        ],
      },
      SA: {
        fhog: 15000,
        max_pp_fhog: 570000,
        fhog_workings_enable: true,
        fhog_workings_by_5_persent: false,
        duty_rates: [
          {
            from: 0,
            to: 50000,
            upfront: 480,
            threshold: 30000,
            percent: 0.03,
          },
          {
            from: 50001,
            to: 100000,
            upfront: 1080,
            threshold: 50000,
            percent: 0.035,
          },
          {
            from: 100001,
            to: 200000,
            upfront: 2830,
            threshold: 100000,
            percent: 0.04,
          },
          {
            from: 200001,
            to: 250000,
            upfront: 6830,
            threshold: 200000,
            percent: 0.0425,
          },
          {
            from: 250001,
            to: 300000,
            upfront: 8955,
            threshold: 250000,
            percent: 0.0475,
          },
          {
            from: 300001,
            to: 500000,
            upfront: 11330,
            threshold: 300000,
            percent: 0.05,
          },
          {
            from: 500001,
            to: 9999999999,
            upfront: 21330,
            threshold: 500000,
            percent: 0.055,
          },
        ],
        // fho_duty_rates not used
      },
    },
  },
  inputs: {
    income: 700000, // integer
    place: 'NT', // string
    fho: false, // boolean
    deposit: 50000, // integer
    situation: 5, // couple - 3 | single - 5
    dependents: 1, // 0 - 1 | 1 - 2 | 2 - 7 | 3+ - 11
  },
  already_calculated: {
    stamps_calcs: {},
    current_stamp_id: null,
  },
  outputs: {
    max_borrowing_capacity: null,
    can_purchase: null,
  },
  get_fho_master_deposit: function (stamp_data, deposit) {
    if (!stamp_data.fhog_workings_enable) return deposit + stamp_data.fhog;

    let costs_at_max;
    if (stamp_data.fhog_workings_by_5_persent)
      costs_at_max = stamp_data.max_pp_fhog * 0.05;
    else {
      let stamp_calcs = this.get_stamp_calcs(
        stamp_data.max_pp_fhog,
        stamp_data,
        true
      );
      costs_at_max = stamp_data.use_total_for_costs_at_max
        ? stamp_calcs.total
        : stamp_calcs.stamp;
    }

    // console.log('costs_at_max: ', costs_at_max);

    let outcomes = [];
    outcomes.push(deposit);

    let outcome_by_fhog = deposit + stamp_data.fhog;
    let outcome_by_costs_at_max = costs_at_max;

    if (deposit >= 0 && deposit <= costs_at_max - stamp_data.fhog)
      outcomes.push(outcome_by_fhog);
    if (
      deposit >= costs_at_max - stamp_data.fhog + 1 &&
      deposit <= costs_at_max
    )
      outcomes.push(outcome_by_costs_at_max);

    // console.log('outcomes: ', outcomes);

    return outcomes.sort((a, b) => b - a)[0];
  },
  get_stamps_purchase_prices: function () {
    if (this.already_calculated.stamps_purchase_prices)
      return this.already_calculated.stamps_purchase_prices;

    let purchase_prices = [];
    for (var i = 0; i <= 670; i++) purchase_prices.push(i * 10000);
    for (var i = 68; i <= 600; i++) purchase_prices.push(i * 100000);
    for (var i = 61; i <= 115; i++) purchase_prices.push(i * 1000000);
    for (var i = 120; i <= 405; i = i + 5) purchase_prices.push(i * 1000000);

    this.already_calculated.stamps_purchase_prices = purchase_prices;
    return purchase_prices;
  },
  get_current_stamp_calc_data: function () {
    return this.get_stamps()[this.get_current_stamp_id()];
  },
  get_current_stamp_id: function () {
    if (this.already_calculated.current_stamp_id)
      return this.already_calculated.current_stamp_id;
    let stamps_data = this.get_stamps();
    let current_stamp_id = null;
    let master_deposit = this.inputs.deposit;
    if (this.inputs.fho) {
      let stamp_data = this.src_constants.stamps[this.inputs.place];
      master_deposit = this.get_fho_master_deposit(
        stamp_data,
        this.inputs.deposit
      );
    }

    stamps_data.forEach(function (stamp_data, i) {
      if (!stamps_data[i + 1]) return;
      if (
        master_deposit >= stamp_data.total &&
        master_deposit < stamps_data[i + 1].total
      )
        current_stamp_id = i;
    });
    this.already_calculated.current_stamp_id = current_stamp_id;
    return current_stamp_id;
  },
  get_stamp_calcs: function (purchase_price, stamp_data, isFHO = false) {
    let duty_rate_key = null;
    let duty_rates = stamp_data.duty_rates;
    if (isFHO && stamp_data.fho_duty_rates)
      duty_rates = stamp_data.fho_duty_rates;

    duty_rates.forEach(function (duty_rate, i) {
      if (purchase_price >= duty_rate.from && purchase_price <= duty_rate.to)
        duty_rate_key = i;
    });

    let duty_rate = {
      from: 0,
      to: 0,
      upfront: 0,
      threshold: 0,
      percent: 0,
    };
    if (duty_rate_key !== null) duty_rate = duty_rates[duty_rate_key];

    let stamp =
      (purchase_price - duty_rate.threshold) * duty_rate.percent +
      duty_rate.upfront;

    // console.log('duty_rate_key: ', duty_rate_key);
    // console.log('duty_rate: ', duty_rate);
    // console.log('purchase_price: ', purchase_price);
    // console.log('stamp: ', stamp);

    if (
      isFHO &&
      stamp_data.fhog_concession &&
      purchase_price <=
        stamp_data.fhog_concession[stamp_data.fhog_concession.length - 1].to
    ) {
      let concession_id = 1;
      stamp_data.fhog_concession.forEach(function (concession_range, i) {
        if (i == 0) return;
        if (
          purchase_price >= concession_range.from &&
          purchase_price <= concession_range.to
        )
          concession_id = i;
      });

      // console.log('concession: ', stamp_data.fhog_concession[concession_id]);
      // console.log('original stamp: ', stamp);
      stamp = Math.max(
        stamp - stamp_data.fhog_concession[concession_id].concession,
        0
      );
      // console.log('stamp: ', stamp);
    }

    // hand exceptions for stamp calculation
    if (
      purchase_price >= 600000 &&
      purchase_price <= 750000 &&
      isFHO &&
      stamp_data.stamp_calc_fho_exceptions
    ) {
      stamp = stamp_data.stamp_calc_fho_exceptions[purchase_price];
    }

    return {
      stamp: stamp,
      total: stamp + purchase_price * 0.1,
      purchase_price: purchase_price,
    };
  },
  get_stamps: function (place = this.inputs.place, fho = this.inputs.fho) {
    if (this.already_calculated.stamps_calcs[place])
      return this.already_calculated.stamps_calcs[place];
    let stamp_data = this.src_constants.stamps[place];
    let stamps_calcs_data = [];
    this.get_stamps_purchase_prices().forEach(function (purchase_price) {
      stamps_calcs_data.push(
        this.get_stamp_calcs(purchase_price, stamp_data, fho)
      );
    }, this);
    this.already_calculated.stamps_calcs[place] = stamps_calcs_data;
    return stamps_calcs_data;
  },
  get_hem: function () {
    return this.src_constants.hem_values[this.get_hem_index()][
      this.get_hem_income_index()
    ];
  },
  get_hem_index: function () {
    return this.inputs.situation * this.inputs.dependents;
  },
  get_hem_income_index: function () {
    let income = this.inputs.income;
    let hem_income_index;
    for (const index in this.src_constants.hem_income_ranges) {
      let range = this.src_constants.hem_income_ranges[index];
      if (income >= range.from && income <= range.to) hem_income_index = index;
    }
    return hem_income_index;
  },
  get_total_tax: function () {
    let tax_rate_key;
    let income = this.inputs.income;
    this.src_constants.tax_rates.forEach(function (tax_rate_constants, i) {
      if (income >= tax_rate_constants.from && income <= tax_rate_constants.to)
        tax_rate_key = i;
    });

    if (tax_rate_key == 0) return 0;

    let tax_rate_constants = this.src_constants.tax_rates[tax_rate_key];
    let prev_tax_rate_constants =
      this.src_constants.tax_rates[tax_rate_key - 1];

    return (
      (income - prev_tax_rate_constants.to) * tax_rate_constants.persent +
      tax_rate_constants.upfront
    );
  },
  get_net_income_pm_without_hem: function () {
    return this.get_net_income() / 12 - this.get_hem();
  },
  get_max_bc: function () {
    let income = this.get_net_income_pm_without_hem() + 0.01;
    let annual_interest_rate = 0.085;
    let number_of_payments_per_year = 12;
    let total_number_of_payments = 360;
    let airpy = annual_interest_rate / number_of_payments_per_year;
    let x = Math.pow(1 + airpy, total_number_of_payments);
    let xx = (airpy * x) / (x - 1);
    let loan = Math.floor(income / xx / 10000) * 10000;
    return Math.max(loan, 0);
  },
  get_max_bc_95_pp: function () {
    return this.get_max_bc() / 0.95;
  },
  get_net_income: function () {
    return this.inputs.income - this.get_total_tax();
  },
  get_fhog_output_bc: function (place = this.inputs.place) {
    if (!this.inputs.fho) return 0;

    let fhog_data = this.src_constants.fhogs[place];
    let max_bc_pp = this.inputs.income > 14000000 ? 0 : this.get_max_bc_95_pp();

    return max_bc_pp + fhog_data.fhog <= fhog_data.fhog_max_pp
      ? fhog_data.fhog
      : 0;
  },
  // get_fhog_output_sd: function() {
  // },
  get_result_property_worth: function () {
    let max_bc_pp = this.inputs.income > 14000000 ? 0 : this.get_max_bc_95_pp();
    let max_sd_pp = this.get_current_stamp_calc_data().purchase_price;

    let fhog_hernya = this.get_fhog_output_bc(this.inputs.place); // tmp

    let bc_vs_sd = Math.min(max_bc_pp, max_sd_pp);
    let bc_95 = max_bc_pp == bc_vs_sd ? bc_vs_sd * 0.95 : 0;
    let bc_95_result =
      max_bc_pp == bc_vs_sd ? bc_95 + this.inputs.deposit + fhog_hernya : 0;

    let bc_less_sd = max_bc_pp < max_sd_pp ? max_bc_pp : 0;
    let bc_more_sd = max_bc_pp > max_sd_pp ? max_sd_pp : 0;
    let bc_less_bc_95 = max_bc_pp < bc_95_result ? bc_95_result : 0;

    // let bc_95_result = (max_bc_pp == bc_vs_sd) ? bc_95 + deposit + fhog_hernya : 0;

    let property_worth = Math.max(bc_less_sd, bc_more_sd, bc_less_bc_95);
    let increased_worth = property_worth * 1.1; // 10% increase
    return {
      standard: new Intl.NumberFormat().format(Math.round(property_worth)),
      increased: new Intl.NumberFormat('en-US').format(
        Math.round(increased_worth)
      ),
    };
  },
  get_result_maximum_borrowing_capacity: function () {
    let max_bc = this.get_max_bc_95_pp();
    max_bc = Math.min(max_bc, 5000000);
    return new Intl.NumberFormat().format(Math.round(max_bc));
  },
};

let validation_messages = {
  required: 'Please fill in the required field.',
  required_option: 'Please choose an option.',
  only_numbers: 'Only numbers are allowed.',
  min: 'Your %field_name% is too low to get a loan at this time.',
};

let validation_functions = {
  required: function (el) {
    if (!el) return false;
    if (!el.value) return false;
    return true;
  },
  required_option: function (el) {
    return this.required(el);
  },
  only_numbers: function (el) {
    return /^\d*[\.\,]?\d*$/.test(el.value.replaceAll(',', ''));
  },
  min: function (el) {
    return (
      parseInt(el.value.replaceAll(',', '')) >= parseInt(el.dataset.minValue)
    );
  },
};

let fields_data = {
  income: {
    query_selector: 'input',
    validation_rules: ['required', 'only_numbers', 'min'],
  },
  deposit: {
    query_selector: 'input',
    validation_rules: ['required', 'only_numbers', 'min'],
  },
  first_owner: {
    query_selector: `input[name=first_owner]:checked`,
    validation_rules: ['required_option'],
  },
  place: {
    query_selector: 'select',
    validation_rules: ['required_option'],
  },
  marital_status: {
    query_selector: `input[name=marital_status]:checked`,
    validation_rules: ['required_option'],
  },
  dependents: {
    query_selector: `input[name=dependents]:checked`,
    validation_rules: ['required_option'],
  },
};

function do_caculate_borrowing_capacity() {
  // console.log('do_caculate_borrowing_capacity run');

  // Validation here
  let validation_success = true;

  for (const field_name in fields_data) {
    let field = fields_data[field_name];
    field.wrapper_el = document.querySelector(
      `*[data-field-name="${field_name}"] .input-wrapper`
    );
    field.input_el = field.wrapper_el.querySelector(field.query_selector);

    for (let rule_name of field.validation_rules) {
      let is_field_valid = validation_functions[rule_name](field.input_el);
      // console.log(`field '${field_name}' validation with rule '${rule_name}': `, is_field_valid);

      field.wrapper_el.classList.toggle('validation-failed', !is_field_valid);
      let validation_message = validation_messages[rule_name].replace(
        '%field_name%',
        field_name
      );
      field.wrapper_el.dataset.validationMsg = !is_field_valid
        ? validation_message
        : '';

      if (!is_field_valid) {
        validation_success = false;
        break;
      }
    }
  }

  // console.log('validation_success: ', validation_success);
  if (!validation_success) {
    dataLayer.push({
      event: 'mortgage_calc_form_not_submit',
    });
    jQuery(function ($) {
      $('html, body').animate(
        {
          scrollTop:
            $('.form-wrapper .validation-failed').parent().offset().top -
            (isMobile ? 71 : 0),
        },
        250
      );
    });
    return;
  }

  dataLayer.push({
    event: 'mortgage_calc_form_submit',
  });
  // Change styles
  let action_button = document.querySelector(
    '.result-wrapper .btn_recalculate'
  );
  let calculator_wrapper = document.querySelector('.calculator-wrapper');
  calculator_wrapper.classList.add('show_result');

  let typBlocks = document.querySelectorAll('.result-typ');

  jQuery(function ($) {
    $('html, body').animate(
      {
        scrollTop: $('.result-wrapper').offset().top - (isMobile ? 71 : 0),
      },
      250
    );
  });

  typBlocks.forEach((element) => {
    element.style = '';
  });

  const form = document.querySelector('.result-form');

  action_button.addEventListener('click', () => {
    const resultForm = document.querySelector('.result-form');
    const stepOne = resultForm.querySelector('[data-step="1"]');
    const stepTwo = resultForm.querySelector('[data-step="2"]');
    calculator_wrapper.classList.remove('show_result');
    form.style = '';
    stepOne.style.display = 'block';
    stepTwo.style.display = 'none';
    document
      .querySelector('.wpcf7-form.not-error')
      ?.classList.remove('not-error');
  });
  // Here will be main formulas calculatings
  // console.log('calculate process started');

  // reset cache;
  business_logic.already_calculated = {
    stamps_calcs: {},
    current_stamp_id: null,
  };

  business_logic.inputs = {
    income: parseInt(
      document
        .querySelector(`*[data-field-name="income"] input`)
        .value.replace(/[, ]/, '')
    ),
    place: document.querySelector(`*[data-field-name="place"] select`).value,
    fho:
      document.querySelector(`*[data-field-name="first_owner"] input:checked`)
        .value === '1',
    deposit: parseInt(
      document
        .querySelector(`*[data-field-name="deposit"] input`)
        .value.replace(/[, ]/, '')
    ),
    situation: parseInt(
      document.querySelector(
        `*[data-field-name="marital_status"] input:checked`
      ).value
    ),
    dependents: parseInt(
      document.querySelector(`*[data-field-name="dependents"] input:checked`)
        .value
    ),
  };

  // console.log('business_logic inputs: ', business_logic.inputs);

  const borrow = addCommas(
    business_logic.get_result_maximum_borrowing_capacity()
  );
  const buy = addCommas(business_logic.get_result_property_worth().standard);
  const increased = business_logic.get_result_property_worth().increased;

  let results = {
    borrow: '$' + borrow,
    buy: '$' + buy,
    increased: '$' + increased,
  };

  // console.log('CALCULATIONS DONE!');
  // console.log('result maximum borrowing capacity: ', results.borrow);
  // console.log('result property worth: ', results.buy);

  // Here show results
  document
    .querySelectorAll('.calculator-wrapper *[data-result-field]')
    .forEach(function (el) {
      el.innerHTML = results[el.dataset.resultField];
    });

  keradan_set_cookie('morgage_calculation_already_made', '1');
  setTimeout(() => main_form_update_after_mortgage_calculation(), 1);
}

function call_popup_after_calculation() {
  document.querySelector(
    '#wpcf7-f11832-o12 .rc_background .rc_title'
  ).style.display = 'none';
  document.querySelector('#wpcf7-f11832-o12 .rc_background p').style.marginTop =
    '70px';
  document.querySelector(
    '#wpcf7-f11832-o12 .rc_background p'
  ).style.marginBottom = '40px';
  let money = document.querySelector(
    '.calculator-wrapper span[data-result-field="borrow"]'
  ).innerHTML;
  document.querySelector(
    '#wpcf7-f11832-o12 .rc_padding div.h4'
  ).innerHTML = `Leave your details below and we’ll send you a plan for securing a loan of up to <span style="font-weight: 700;">${money}</span> and getting the best deal for your new home.`;
  document.querySelector(
    '#wpcf7-f11832-o12 .rc_padding div.h4'
  ).style.fontSize = '14px';
  document.querySelector(
    '#wpcf7-f11832-o12 .rc_padding div.h4'
  ).style.fontWeight = '400';
  document.querySelector('#wpcf7-f11832-o12 .rc_padding ul').style.display =
    'none';

  setTimeout(function () {
    let selector =
      '.header_button .btn_yellow.rc_open, .mobilehead_button .btn_yellow.rc_open';
    document.querySelectorAll(selector)[0].click();
  }, 1);
}

let waitError = setInterval(() => {
  if (
    document.querySelector('.result-form .wpcf7-response-output')?.innerText !=
      '' &&
    document.querySelector('.result-form .wpcf7-response-output')?.innerText !=
      'Thank you'
  ) {
    console.log(
      document.querySelector('.result-form .wpcf7-response-output').innerText
    );

    document.querySelector('.result-form .wpcf7-response-output').style =
      'opacity: 1';

    setTimeout(() => {
      if (
        document.querySelector('.result-form .wpcf7-response-output')
          ?.innerText != ''
      ) {
        document.querySelector('.result-form .wpcf7-response-output').style =
          'opacity: 0';
        document.querySelector(
          '.result-form .wpcf7-response-output'
        ).innerText = '';
      }
    }, 5000);
  }
}, 100);
