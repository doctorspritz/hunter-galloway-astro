const inputsName = {
  name: 'text-name',
  email: 'text-email',
  phone: 'text-phone',
};

function handleValidationErrors(errors, form) {
  errors.forEach((fieldObjError) => {
    addErrorMessage(
      form,
      `[name="${fieldObjError.field}"]`,
      fieldObjError.message
    );
  });
}

function addErrorMessage(form, selector, message) {

  const field = form.querySelector(selector);
  if (!field) {
    return;
  }

  const errorTip = document.createElement('span');
  errorTip.classList.add('not-valid-tip');
  errorTip.textContent = message;
  if (field.matches('select')) {
    field.parentElement.insertAdjacentElement('afterend', errorTip);
  } else {
    field.insertAdjacentElement('afterend', errorTip);
  }
}

function validateField(data, fieldName, errorMessages, regex, errorMessage) {
  if (!data[fieldName]) {
    errorMessages[fieldName] = `Please enter your ${fieldName.replace(
      'text-',
      ''
    )}.`;
  } else if (regex && !regex.test(data[fieldName].trim())) {
    errorMessages[fieldName] = errorMessage;
  }
}

function removeExistingErrorMessages(form) {
  const existingErrorTips = form.querySelectorAll('.not-valid-tip');
  existingErrorTips.forEach((errorTip) => {
    errorTip.remove();
  });
}

function createErrorMessages(form, errorMessages) {
  Object.keys(errorMessages).forEach((fieldName) => {
    const field = form.querySelector(`[name="${fieldName}"]`);
    if (!field) {
      return;
    }

    const errorTip = document.createElement('span');
    errorTip.classList.add('not-valid-tip');
    errorTip.textContent = errorMessages[fieldName];

    if (field.matches('select')) {
      field.parentElement.insertAdjacentElement('afterend', errorTip);
    } else {
      field.insertAdjacentElement('afterend', errorTip);
    }
  });
}

const formHandleSubmit = async (event) => {
  event.preventDefault();
  const form = event.target;
  const formData = new FormData(form);
  const data = {};
  formData.forEach((value, key) => {
    data[key] = value;
  });

  const errorMessages = {};

  validateField(data, inputsName.name, errorMessages);
  validateField(
    data,
    inputsName.email,
    errorMessages,
    /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    'Please enter a valid email address.'
  );
  validateField(
    data,
    inputsName.phone,
    errorMessages,
    /^(04\d{2}\s\d{3}\s\d{3}|\d{2}\s\d{4}\s\d{4})$/,
    'Please enter a valid phone number.'
  );

  // Remove existing error messages
  removeExistingErrorMessages(form);

  // Create new error messages
  createErrorMessages(form, errorMessages);


  // If there are no error messages, proceed with form submission
  if (Object.keys(errorMessages).length !== 0) {
    return;
  }
  form.dataset.submit = 'pending';

  try {
    const response = await fetch(
      `${location.origin}/wp-json/contact-form-7/v1/contact-forms/11832/feedback`,
      { method: 'POST', body: formData }
    );

    const result = await response.json();

    if (result.status === 'validation_failed') {
      handleValidationErrors(result.invalid_fields, form);
      form.dataset.submit = 'error';
      return;
    }

    if (result.status === 'mail_failed') {
      throw new Error(result.message);
    }

    form.dataset.submit = 'success';
  } catch (error) {
    form.dataset.submit = 'error';
    console.log('error: ', error);
    addErrorMessage(
      form,
      'button[type="submit"]',
      error.message || 'An error occurred. Please try again later.'
    );
  }
};

document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('#assessment-form');

  if (form) {
    form.addEventListener('submit', formHandleSubmit);
  }
});

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

// format phone number as user types
const phoneInput = document.querySelectorAll('input[name="text-phone"]');

if (phoneInput || phoneInput.length !== 0) {
  phoneInput.forEach((item) => {
    let value = '';
    item.addEventListener('input', function (event) {
      var input = event.target;
      if (input.value.length <= 12) {
        var formattedPhoneNumber = formatPhoneNumber(input.value);
        input.value = formattedPhoneNumber;
        value = formattedPhoneNumber;
      } else {
        input.value = value;
      }
    });
    item.addEventListener('keydown', function (event) {
      var key = event.key;
      var selectionStart = item.selectionStart;
      var selectionEnd = item.selectionEnd;
      var value = item.value;

      if (key === 'Backspace' || key === 'Delete') {
        // If Backspace or Delete is pressed, remove the previous or next character respectively
        if (key === 'Backspace' && selectionStart > 0) {
          item.value =
            value.slice(0, selectionStart - 1) + value.slice(selectionEnd);
          item.setSelectionRange(selectionStart - 1, selectionStart - 1);
        } else if (key === 'Delete' && selectionEnd < value.length) {
          item.value =
            value.slice(0, selectionStart) + value.slice(selectionEnd + 1);
          item.setSelectionRange(selectionStart, selectionStart);
        }
        event.preventDefault(); // Prevent default behavior (e.g., removing entire value)
      }
    });
  });
}
