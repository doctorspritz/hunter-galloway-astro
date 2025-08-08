const $$el = (selector) => document.querySelectorAll(selector);
const $el = (selector) => document.querySelector(selector);
let isMobile = window.matchMedia('(max-width: 991px)').matches;

window.addEventListener(
  'resize',
  () => (isMobile = window.matchMedia('(max-width: 991px)').matches)
);

function scrollToSection(event, scrollToElement = '') {
  event.preventDefault();

  let target = event.currentTarget;
  const id = scrollToElement == '' ? target.dataset.href : scrollToElement;

  if (target.dataset.index != undefined) {
    const dataIndex = +target.dataset.index;
    $$el('.tabs li')[dataIndex]?.click();
  }

  jQuery(function ($) {
    $('html, body').animate(
      {
        scrollTop: $(id).offset().top - (isMobile ? 71 : 0),
      },
      500
    );
  });
}

function addCommas(inputOrValue) {
  let sanitizedValue = inputOrValue;

  if (inputOrValue.tagName == 'INPUT') {
    sanitizedValue = inputOrValue.value.replace(/\D/g, '');
    sanitizedValue = sanitizedValue.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    inputOrValue.value = sanitizedValue;
  } else {
    sanitizedValue = sanitizedValue.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    return sanitizedValue;
  }
}

function formatPhoneNumber(phoneNumber) {
  phoneNumber = phoneNumber.replace(/\D/g, ''); // Remove all non-numeric characters

  // Check if it's a mobile phone number
  if (/^04\d{0,8}$/.test(phoneNumber)) {
    // Format as mobile phone: XXXX XXX XXX
    return phoneNumber
      .replace(/(\d{4})(\d{0,3})(\d{0,3})/, '$1 $2 $3')
      .slice(0, 12); // Limit to 11 characters
  }

  // Check if it's a landline number
  if (/^\d{2}\d{0,4}\d{0,4}$/.test(phoneNumber)) {
    // Format as landline: XX XXXX XXXX
    return phoneNumber
      .replace(/(\d{2})(\d{0,4})(\d{0,4})/, '$1 $2 $3')
      .slice(0, 12); // Limit to 11 characters
  }

  return phoneNumber; // No formatting if not recognized as mobile or landline
}
