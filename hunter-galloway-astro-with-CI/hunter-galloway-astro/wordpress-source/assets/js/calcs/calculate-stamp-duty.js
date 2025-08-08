const OWNER_OCCUPIED = 'Owner Occupied';
const PRIMARY_RESIDENCE_ID = 'connective-htmlcw-pf-primary-residence';
const VACANT_LAND = 'Vacant Land';
const NEW_HOME = 'New Home';
const ESTABLISHED_HOME = 'Established Home';

let isValidCalculator = true;

const numberWithCommas = (x) => {
  if (x != null) {
    return x.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  } else {
    return '';
  }
};

const priceInput = document.getElementById(
  'connective-htmlcw-pf-property-price'
);

const priceInputNumericValue = new AutoNumeric(priceInput, {
  currencySymbol: '',
  digitGroupSeparator: ',',
  decimalCharacter: '.',
  decimalPlacesOverride: 0,
  minimumValue: 0,
  maximumValue: 9999999999999,
});

var connective_htmlcw_property_fees = {
  handleKeyPress: function (e) {
    var key = e.keyCode || e.which;
    if (key === 13) {
      connective_htmlcw_property_fees.calculatePropertyFees();
    }
  },
  feeStructure: {
    VIC: {
      registrationFee: 122.1,
      dischargeFee: 122.1,
    },
    NSW: {
      registrationFee: 171.7,
      dischargeFee: 171.7,
    },
    NT: {
      registrationFee: 172,
      dischargeFee: 172,
    },
    TAS: {
      registrationFee: 159.88,
      dischargeFee: 198.22,
    },
    SA: {
      registrationFee: 192,
      dischargeFee: 192,
    },
    WA: {
      //https://www.landgate.wa.gov.au/land-and-property/land-transactions-hub/land-transaction-fees/#f88e6cd7-4e42-4bb8-ae52-603e3bf7e742=
      registrationFee: 210.3,
      dischargeFee: 210.3,
    },
    QLD: {
      registrationFee: 231.98,
      dischargeFee: 231.98,
    },
    ACT: {
      registrationFee: 172,
      dischargeFee: 172,
    },
  },
  calculatePropertyFees: function (ev) {
    const isSubmitTriggered = ev?.id === 'sd-calculator-submit';
    if (ev?.value?.trim()?.length > 0) {
      const inputWrapper = ev.closest('.sd-calculator__input-wrapper');
      if (inputWrapper) {
        inputWrapper.classList.remove('validation-failed');
        isValidCalculator = true;
      }
    }

    if (ev?.value === OWNER_OCCUPIED) {
      const cbPr = document.getElementById(PRIMARY_RESIDENCE_ID);
      const cbFhb = document.getElementById(
        'connective-htmlcw-pf-first-home-buyer'
      );
      const cbFhbNSW = document.getElementById(
        'connective-htmlcw-pf-first-home-buyer-nsw'
      );
      const cbHbcACT = document.getElementById(
        'connective-htmlcw-pf-home-buyer-concession-act'
      );

      if (cbPr) {
        cbPr.checked = true;
      }

      if (cbFhb) {
        cbFhb.checked = true;
      }

      if (cbFhbNSW) {
        cbFhbNSW.checked = true;
      }

      if (cbHbcACT) {
        cbHbcACT.checked = true;
      }
    }
    // Text fields
    var state = document.getElementById('connective-htmlcw-pf-state').value;
    var stateInput = document.getElementById('connective-htmlcw-pf-state');

    if (isSubmitTriggered && (state.trim().length === 0 || !state)) {
      stateInput
        .closest('.sd-calculator__input-wrapper')
        .classList.add('validation-failed');
      stateInput
        .closest('.sd-calculator__input-wrapper')
        .setAttribute('data-error', 'Please enter a valid value.');
      stateInput.focus();
      isValidCalculator = false;
    }

    var propertyPrice = priceInputNumericValue.getNumericString();
    var propertyInput = document.getElementById(
      'connective-htmlcw-pf-property-price'
    );
    if (
      isSubmitTriggered &&
      (propertyPrice.trim().length === 0 || propertyPrice < 0 || !propertyPrice)
    ) {
      propertyInput
        .closest('.sd-calculator__input-wrapper')
        .classList.add('validation-failed');
      propertyInput
        .closest('.sd-calculator__input-wrapper')
        .setAttribute('data-error', 'Please enter a valid Purchase price.');
      // $('.modal-body').text("Please enter a valid Purchase price.");
      // $('#myModal').modal();
      propertyInput.focus();
      isValidCalculator = false;

      return;
    }
    propertyPrice = parseFloat(propertyPrice);
    // Drop down fields
    var securityType = document.querySelector(
      'input[name="connective-htmlcw-pf-security-type-rb"]:checked'
    ).value;
    // var transactionType = document.querySelector('input[name="connective-htmlcw-pf-transaction-type-rb"]:checked').value;
    var transactionType = 'Purchase'; // default value
    var propertyPurpose = document.querySelector(
      'input[name="connective-htmlcw-pf-property-purpose-rb"]:checked'
    ).value;
    // checkbox Check
    connective_htmlcw_property_fees.checkboxCheck(
      state,
      propertyPurpose,
      transactionType
    );
    // Display fields and value variables for them
    var stampDuty = 0;
    var transferFee = 0;
    var registrationFee = 0;
    var mortgageDischargeFee = 0;
    var foreignBuyer = 0;
    var total = 0;
    // span
    var stampDutySpan = document.getElementById(
      'connective-htmlcw-pf-purchase-stamp-duty'
    );
    var foreignBuyerFeeSpan = document.getElementById(
      'connective-htmlcw-pf-foreign-buyer-fee'
    );
    var transferFeeSpan = document.getElementById(
      'connective-htmlcw-pf-transfer-fee'
    );
    var registrationFeeSpan = document.getElementById(
      'connective-htmlcw-pf-registration-fee'
    );
    var totalSpan = document.getElementById('connective-htmlcw-pf-total');
    // Checkboxes
    var cbFhb = document.getElementById(
      'connective-htmlcw-pf-first-home-buyer'
    );
    var cbFhbNSW = document.getElementById(
      'connective-htmlcw-pf-first-home-buyer-nsw'
    );
    var cbHbcACT = document.getElementById(
      'connective-htmlcw-pf-home-buyer-concession-act'
    );

    var cbPr = document.getElementById(PRIMARY_RESIDENCE_ID);
    var cbFb = document.getElementById('connective-htmlcw-pf-foreign-buyer');
    if (transactionType === 'Purchase') {
      switch (state) {
        case 'NSW':
          foreignBuyer = (propertyPrice * 8) / 100;
          break;
        case 'VIC':
          foreignBuyer = (propertyPrice * 8) / 100;
          break;
        case 'QLD':
          foreignBuyer = (propertyPrice * 8) / 100;
          break;
        case 'SA':
          foreignBuyer = (propertyPrice * 7) / 100;
          break;
        case 'TAS':
          foreignBuyer = (propertyPrice * 8) / 100;
          break;
        case 'WA':
          foreignBuyer = (propertyPrice * 7) / 100;
          break;
        default:
          break;
      }
    }
    if (!cbFb.checked) {
      foreignBuyer = 0;
    }

    var fees = this.feeStructure[state]
      ? this.feeStructure[state]
      : {
          registrationFee: 0,
          dischargeFee: 0,
        };
    registrationFee = fees.registrationFee;
    mortgageDischargeFee = fees.dischargeFee;

    // Calculate stamp duty and transfer fee
    if (transactionType === 'Purchase') {
      transferFee = connective_htmlcw_property_fees.calculateTransferFee(
        state,
        propertyPrice
      );
      var cbFhbchecked = cbFhb.checked;
      if (state === 'NSW') {
        cbFhbchecked = cbFhbNSW.checked;
      }
      stampDuty = connective_htmlcw_property_fees.calculatePurchaseStampDuty(
        state,
        propertyPrice,
        securityType,
        cbPr.checked,
        cbFhbchecked,
        cbHbcACT.checked
      );
    } else {
      // Calculate mortgage registration fee for refinance
      registrationFee = registrationFee + mortgageDischargeFee;
      transferFee = 0;
      stampDuty = 0;
    }

    // Calculate total
    total = stampDuty + transferFee + registrationFee + foreignBuyer;
    // Set text for all display fields
    stampDutySpan.innerHTML = '$' + numberWithCommas(stampDuty);
    foreignBuyerFeeSpan.innerHTML = '$' + numberWithCommas(foreignBuyer);
    transferFeeSpan.innerHTML = '$' + numberWithCommas(transferFee);
    registrationFeeSpan.innerHTML = '$' + numberWithCommas(registrationFee);
    totalSpan.innerHTML = '$' + numberWithCommas(total);
  },
  checkboxCheck: function (state, propertyPurpose, transactionType) {
    // Checkboxes
    var cbFhb = document.getElementById(
      'connective-htmlcw-pf-first-home-buyer'
    );
    var cbFhb_no = cbFhb
      .closest('.sd-calculator__form-control')
      .querySelector('input[data-value="no"]');
    var cbFhbNSW = document.getElementById(
      'connective-htmlcw-pf-first-home-buyer-nsw'
    );
    var cbFhbNSW_no = cbFhbNSW
      .closest('.sd-calculator__form-control')
      .querySelector('input[data-value="no"]');
    var cbHbcACT = document.getElementById(
      'connective-htmlcw-pf-home-buyer-concession-act'
    );
    var cbHbcACT_no = cbHbcACT
      .closest('.sd-calculator__form-control')
      .querySelector('input[data-value="no"]');
    var cbPr = document.getElementById(PRIMARY_RESIDENCE_ID);
    var cbPr_no = cbPr
      .closest('.sd-calculator__form-control')
      .querySelector('input[data-value="no"]');
    var cbFb = document.getElementById('connective-htmlcw-pf-foreign-buyer');
    // Checkbox labels
    var cbFhbLabel = document.getElementById(
      'connective-htmlcw-pf-first-home-buyer-label'
    );
    var cbFhbNSWLabel = document.getElementById(
      'connective-htmlcw-pf-first-home-buyer-nsw-label'
    );
    var cbHbcACTLabel = document.getElementById(
      'connective-htmlcw-pf-home-buyer-concession-act-label'
    );
    var cbPrLabel = document.getElementById(
      'connective-htmlcw-pf-primary-residence-label'
    );
    var cbFbLabel = document.getElementById(
      'connective-htmlcw-pf-foreign-buyer-label'
    );
    // foreign Buyer Display Span
    var foreignBuyerDisplaySpan = document.getElementsByClassName(
      'foreign-buyer-display-span'
    );
    // default value
    cbFhbLabel.style.display = 'none';
    cbFhbNSWLabel.style.display = 'none';
    cbHbcACTLabel.style.display = 'none';
    cbPrLabel.style.display = 'none';
    cbFbLabel.style.display = 'grid';
    // Enable/disable property price checkbox
    if (propertyPurpose === 'Investment') {
      cbFhb.checked = false;
      cbFhb.disabled = true;
      cbFhb_no.checked = true;
      cbFhb_no.disabled = true;

      cbFhbNSW.checked = false;
      cbFhbNSW.disabled = true;
      cbFhbNSW_no.checked = true;
      cbFhbNSW_no.disabled = true;

      cbHbcACT.checked = false;
      cbHbcACT.disabled = true;
      cbHbcACT_no.checked = true;
      cbHbcACT_no.disabled = true;

      cbPr.checked = false;
      cbPr.disabled = true;
      cbPr_no.checked = true;
      cbPr_no.disabled = true;
    } else {
      cbFhb.disabled = false;
      cbFhb_no.disabled = false;

      cbFhbNSW.disabled = false;
      cbFhbNSW_no.disabled = false;

      cbHbcACT.disabled = false;
      cbHbcACT_no.disabled = false;

      cbPr.disabled = false;
      cbPr_no.disabled = false;
    }

    /*if (propertyPurpose === "Investment") {
        /!*switch (state) {
            case "NSW":
            case "VIC":
            case "QLD":
            case "WA":
                if (transactionType === "Purchase") {
                    cbFbLabel.style.display = "block";
                }
                break;
            default:
                cbFb.checked = false;
                cbFbLabel.style.display = "none";
                break;
        }*!/
      } else {*/
    switch (state) {
      case 'ACT':
        cbHbcACTLabel.style.display = 'grid';
        cbPrLabel.style.display = 'grid';
        break;
      case 'NSW':
        cbFhbNSWLabel.style.display = 'grid';
        cbPrLabel.style.display = 'grid';
        break;
      default:
        cbFhbLabel.style.display = 'grid';
        cbPrLabel.style.display = 'grid';
        break;
    }
    /*
            }*/
    // foreignBuyer is 0 if not being checked
    for (var i = 0; i < foreignBuyerDisplaySpan.length; i++) {
      // if foreign buyer tick, hide refinance
      if (!cbFb.checked) {
        foreignBuyerDisplaySpan[i].style.display = 'none';
      } else {
        foreignBuyerDisplaySpan[i].style.display = 'flex';
      }
    }
  },
  calculateTransferFee: function (state, price) {
    var value = 0;
    switch (state) {
      case 'VIC':
        value = connective_htmlcw_property_fees.transferFeeVIC(price);
        break;
      case 'QLD':
        value = connective_htmlcw_property_fees.transferFeeQLD(price);
        break;
      case 'TAS':
        if (price > 0) {
          value = 244.97;
        }
        break;
      case 'NSW':
        //https://www.nswlrs.com.au/Fees
        if (price > 0) {
          value = 171.7;
        }
        break;
      case 'SA':
        value = connective_htmlcw_property_fees.transferFeeSA(price);
        break;
      case 'ACT':
        //https://www.accesscanberra.act.gov.au/building-and-property/land-title-lodgement-registration-and-search-forms-related-fees
        value = 463;
        break;
      case 'WA':
        value = connective_htmlcw_property_fees.transferFeeWA(price);
        break;
      case 'NT':
        value = 172;
        break;
    }
    return value;
  },
  transferFeeVIC: function (price) {
    var value;
    //https://www.land.vic.gov.au/land-registration/fees-guides-and-forms/2024-25-fees -> Guide to transfer of Land Act fees 2024 2025
    if (price > 0) {
      var constant = 98.6;
      var rate = 2.34;
      var max = 3609;
      var temp = price / 1000;
      temp = Math.ceil(temp);
      value = temp * rate + constant;
      if (value > max) {
        value = max;
      }
    }
    return value;
  },
  transferFeeQLD: function (price) {
    var value;
    // https://www.titlesqld.com.au/wp-content/uploads/2024/05/Titles_Registry_Fees_FY-2024-to-2025.pdf
    var transferLot = 43.56;
    var fee = 231.98;
    if (price > 180000) {
      var temp = price - 180000;
      temp = temp / 10000;
      temp = Math.ceil(temp);
      temp = fee + temp * transferLot;
      value = temp;
    } else {
      value = fee;
    }
    return value;
  },
  transferFeeSA: function (price) {
    var value;
    // https://www.landservices.com.au/__data/assets/pdf_file/0024/73635/Fees-and-Charges-2024-25.pdf
    if (price <= 5000) {
      value = 192;
    } else if (price > 5000 && price <= 20000) {
      value = 215;
    } else if (price > 20000 && price <= 40000) {
      value = 236;
    } else if (price > 40000 && price <= 50000) {
      value = 236;
    } else if (price > 50000) {
      var rate = 99.0;
      var constant = 332;
      var temp = price - 50000;
      temp = temp / 10000;
      temp = Math.ceil(temp);
      value = constant + temp * rate;
    }
    return value;
  },
  transferFeeWA: function (price) {
    //https://www.landgate.wa.gov.au/land-and-property/land-transactions-hub/land-transaction-fees/#f88e6cd7-4e42-4bb8-ae52-603e3bf7e742=
    var value;

    if (price <= 85000) {
      value = 210.3;
    } else if (price > 85000 && price <= 120000) {
      value = 220.3;
    } else if (price > 120000 && price <= 200000) {
      value = 240.3;
    } else if (price > 200000) {
      //$20 for every $100 000 or part there of above $200 000
      var fee = 240.3;
      var temp = price - 200000;
      temp = temp / 100000;
      temp = Math.ceil(temp);
      value = fee + temp * 20;
    }
    return value;
  },
  calculatePurchaseStampDuty: function (
    state,
    value,
    securityType,
    primaryResidence,
    firstHomeBuyer,
    hbcACT
  ) {
    // This is to ensure that where the property type is investment, the FHB discounts won't apply
    if (firstHomeBuyer === true && primaryResidence === false) {
      firstHomeBuyer = false;
    }
    var cost = 0;
    switch (state) {
      case 'VIC':
        cost = connective_htmlcw_property_fees.stampDutyFormulaVIC(
          value,
          firstHomeBuyer,
          primaryResidence,
          securityType
        );
        break;
      case 'NSW':
        cost = connective_htmlcw_property_fees.stampDutyFormulaNSW(
          value,
          firstHomeBuyer,
          primaryResidence,
          securityType
        );
        break;
      case 'SA':
        cost = connective_htmlcw_property_fees.stampDutyFormulaSA(
          value,
          firstHomeBuyer,
          securityType
        );
        break;
      case 'QLD':
        cost = connective_htmlcw_property_fees.stampDutyFormulaQLD(
          value,
          firstHomeBuyer,
          primaryResidence,
          securityType
        );
        break;
      case 'NT': // update 7th feb 2013
        cost = connective_htmlcw_property_fees.stampDutyFormulaNT(
          value,
          firstHomeBuyer,
          securityType
        );
        break;
      case 'WA':
        cost = connective_htmlcw_property_fees.stampDutyFormulaWA(
          value,
          firstHomeBuyer,
          primaryResidence,
          securityType
        );
        break;
      case 'ACT':
        cost = connective_htmlcw_property_fees.stampDutyFormulaACT(
          value,
          primaryResidence,
          securityType,
          hbcACT
        );
        break;
      case 'TAS':
        cost = connective_htmlcw_property_fees.stampDutyFormulaTAS(
          value,
          firstHomeBuyer,
          primaryResidence,
          securityType,
          hbcACT
        );
        break;
      default:
        cost = 0;
        break;
    } // end of "switch(state)"

    cost = cost > 0 ? cost : 0;
    return Math.floor(cost);
  },
  stampDutyFormulaVIC: function (
    value,
    firstHomeBuyer,
    primaryResidence,
    securityType
  ) {
    const rateType = 'Percentage';
    let rate = 0;
    let constant = 0;
    let reduceBy = 0;
    if (primaryResidence) {
      if (value <= 25000) {
        rate = 1.4;
        constant = 0;
        reduceBy = 0;
      } else if (value <= 130000) {
        rate = 2.4;
        constant = 350;
        reduceBy = 25000;
      } else if (value <= 960000) {
        rate = 6;
        constant = 2870;
        reduceBy = 130000;
      } else if (value <= 2000000) {
        rate = 5.5;
        constant = 0;
        reduceBy = 0;
      } else {
        // value > 2000000
        rate = 6.5;
        constant = 110000;
        reduceBy = 2000000;
      }
    } else {
      //https://www.sro.vic.gov.au/rates-taxes-duties-and-levies/general-land-transfer-duty-property-current-rates
      if (value <= 25000) {
        rate = 1.4;
        constant = 0;
        reduceBy = 0;
      } else if (value <= 130000) {
        rate = 2.4;
        constant = 350;
        reduceBy = 25000;
      } else if (value <= 960000) {
        rate = 6;
        constant = 2870;
        reduceBy = 130000;
      } else if (value <= 2000000) {
        rate = 5.5;
        constant = 0;
        reduceBy = 0;
      } else if (value > 2000000) {
        rate = 6.5;
        constant = 110000;
        reduceBy = 2000000;
      }
    }
    let cost = connective_htmlcw_property_fees.stampDuty(
      value,
      rate,
      constant,
      reduceBy,
      rateType
    );
    // https://www.sro.vic.gov.au/first-home-owner/exemption-concession-reduction
    if (primaryResidence && firstHomeBuyer && value <= 600000) {
      return 0;
    } else if (primaryResidence && firstHomeBuyer && value <= 750000) {
      var concessionAmount = cost * ((value - 600000) / 150000);
      return concessionAmount;
    }

    if (primaryResidence && !firstHomeBuyer && value <= 550000) {
      // Apply additional discount up to $3,100.
      // You’d need to decide on the exact formula here (for example, a flat discount or sliding scale)
      // For instance:
      const pprDiscount = 3100; // or a sliding formula
      cost = Math.max(0, cost - pprDiscount);
    }

    return cost;
  },
  stampDutyFormulaNSW: function (
    value,
    firstHomeBuyer,
    primaryResidence, // not used in NSW concession logic
    securityType
  ) {
    // Progressive scale (all values in dollars)
    // Let x = dutiable value
    // Band 1: 0 < x ≤ 17,000: Duty = 1.25% of x
    // Band 2: 17,001 ≤ x ≤ 36,000: Duty = $175 + 1.5% of (x – 17,000)
    // Band 3: 36,001 ≤ x ≤ 97,000: Duty = $445 + 1.75% of (x – 36,000)
    // Band 4: 97,001 ≤ x ≤ 364,000: Duty = $1,405 + 3.50% of (x – 97,000)
    // Band 5: 364,001 ≤ x ≤ 1,212,000: Duty = $9,805 + 4.50% of (x – 364,000)
    // Band 6: x > 1,212,000: Duty = $49,069 + 5.50% of (x – 1,212,000)
    let rateType = 'Part';
    let rate = 0;
    let constant = 0;
    let reduceBy = 0;

    if (value > 0 && value <= 17000) {
      rate = 1.25;
      constant = 0;
      reduceBy = 0;
    } else if (value > 17000 && value <= 36000) {
      rate = 1.5;
      constant = 175;
      reduceBy = 17000;
    } else if (value > 36000 && value <= 97000) {
      rate = 1.75;
      constant = 445;
      reduceBy = 36000;
    } else if (value > 97000 && value <= 364000) {
      rate = 3.5;
      constant = 1405;
      reduceBy = 97000;
    } else if (value > 364000 && value <= 1212000) {
      rate = 4.5;
      constant = 11580;
      reduceBy = 364000;
    } else if (value > 1212000) {
      rate = 5.5;
      constant = 49069;
      reduceBy = 1212000;
    }

    // Calculate the standard duty using the progressive scale
    const standardDuty = connective_htmlcw_property_fees.stampDuty(
      value,
      rate,
      constant,
      reduceBy,
      rateType
    );

    // First‑Home Buyer Scheme per new logic:
    // • Eligible first‑home buyers pay no duty on properties valued up to $800,000.
    // • For properties between $800,000 and $1,000,000,
    //   a sliding-scale concession applies, increasing linearly from $0 at $800k to full duty at $1M.
    if (
      firstHomeBuyer &&
      (securityType === NEW_HOME || securityType === ESTABLISHED_HOME)
    ) {
      if (value <= 800000) {
        return 0;
      } else if (value < 1000000) {
        // Calculate fraction of the standard duty to apply
        const concessionFactor = (value - 800000) / 200000;
        return standardDuty * concessionFactor;
      }
      // For values ≥ $1,000,000, no concession applies.
    }

    return standardDuty;
  },
  stampDutyFormulaSA: function (value, firstHomeBuyer, securityType) {
    const rateType = 'Part';
    let rate = 0;
    let constant = 0;
    let reduceBy = 0;

    // Standard Duty progressive scale for South Australia:
    // Band 1: 0 < x ≤ $12,000: Duty = 1% of x
    if (value > 0 && value <= 12000) {
      rate = 1;
      constant = 0;
      reduceBy = 0;
    }
    // Band 2: $12,001 ≤ x ≤ $30,000: Duty = $120 + 2% of (x – $12,000)
    else if (value > 12000 && value <= 30000) {
      rate = 2;
      constant = 120;
      reduceBy = 12000;
    }
    // Band 3: $30,001 ≤ x ≤ $50,000: Duty = $480 + 3% of (x – $30,000)
    else if (value > 30000 && value <= 50000) {
      rate = 3;
      constant = 480;
      reduceBy = 30000;
    }
    // Band 4: $50,001 ≤ x ≤ $100,000: Duty = $1,080 + 3.5% of (x – $50,000)
    else if (value > 50000 && value <= 100000) {
      rate = 3.5;
      constant = 1080;
      reduceBy = 50000;
    }
    // Band 5: $100,001 ≤ x ≤ $200,000: Duty = $2,830 + 4% of (x – $100,000)
    else if (value > 100000 && value <= 200000) {
      rate = 4;
      constant = 2830;
      reduceBy = 100000;
    }
    // Band 6: $200,001 ≤ x ≤ $250,000: Duty = $6,830 + 4.25% of (x – $200,000)
    else if (value > 200000 && value <= 250000) {
      rate = 4.25;
      constant = 6830;
      reduceBy = 200000;
    }
    // Band 7: $250,001 ≤ x ≤ $300,000: Duty = $8,955 + 4.75% of (x – $250,000)
    else if (value > 250000 && value <= 300000) {
      rate = 4.75;
      constant = 8955;
      reduceBy = 250000;
    }
    // Band 8: $300,001 ≤ x ≤ $500,000: Duty = $11,330 + 5% of (x – $300,000)
    else if (value > 300000 && value <= 500000) {
      rate = 5;
      constant = 11330;
      reduceBy = 300000;
    }
    // Band 9: x > $500,000: Duty = $21,330 + 5.5% of (x – $500,000)
    else if (value > 500000) {
      rate = 5.5;
      constant = 21330;
      reduceBy = 500000;
    }

    // Calculate the standard duty using the helper (using "Part" mode)
    const standardDuty = connective_htmlcw_property_fees.stampDuty(
      value,
      rate,
      constant,
      reduceBy,
      rateType
    );

    // First‑Home Buyer Relief for new homes only:
    // • Full exemption for new homes valued up to $650,000.
    // • For values between $650,000 and $700,000, a linear sliding concession applies.

    if (firstHomeBuyer && securityType === NEW_HOME) {
      if (value <= 650000) {
        return 0;
      } else if (value > 650000 && value <= 700000) {
        const concessionFactor = (value - 650000) / 50000;
        return standardDuty * concessionFactor;
      }
      // For values above $700,000, no concession applies.
    }

    return standardDuty;
  },
  stampDutyFormulaQLD: function (
    value,
    firstHomeBuyer,
    primaryResidence,
    securityType
  ) {
    // Helper to compute standard duty (non-concession)
    function standardDuty(x) {
      let rate, constant, reduceBy;
      if (x <= 75000) {
        rate = 1.5;
        constant = 0;
        reduceBy = 0;
      } else if (x <= 540000) {
        rate = 3.5;
        constant = 1050;
        // Since (75000/100)*1.5 = 1125, but per the business rules duty is exactly $1,050 at 75k
        reduceBy = 75000;
      } else if (x <= 1000000) {
        rate = 4.5;
        constant = 17325;
        reduceBy = 540000;
      } else {
        rate = 5.75;
        constant = 38025;
        reduceBy = 1000000;
      }

      return connective_htmlcw_property_fees.stampDuty(
        x,
        rate,
        constant,
        reduceBy,
        'Part'
      );
    }

    // Check if buyer is eligible for a first home buyer concession:
    if (primaryResidence && firstHomeBuyer) {
      if (value <= 700000) {
        return 0; // Concession duty is the difference between the standard duty at x and at 700k.
      } else if (value < 800000) {
        return standardDuty(value) - standardDuty(700000); // For values >= 800000, no concession applies.
      }
    }

    return standardDuty(value);
  },

  stampDutyFormulaNT: function (value, firstHomeBuyer, securityType) {
    let cost = 0;

    // Standard Duty calculation:
    if (value <= 525000) {
      // For x <= $525,000, use the continuous (formula-based) calculation:
      // v is the value in thousands
      let v = value / 1000;
      // This formula roughly mimics a quadratic progression
      cost = Math.round((0.06571441 * v * v + 15 * v) * 100) / 100;
    } else if (value <= 3000000) {
      // For $525,001 ≤ x ≤ $3,000,000: Duty = 4.95% of x
      cost = 0.0495 * value;
    } else if (value <= 5000000) {
      // For $3,000,001 ≤ x ≤ $5,000,000: Duty = 5.75% of x
      cost = 0.0575 * value;
    } else {
      // For x > $5,000,000: Duty = 5.95% of x
      cost = 0.0595 * value;
    }

    // Territory Home Owner Discount:
    // Eligible owner‑occupiers (typically first‑home buyers) can receive
    // up to $18,601 off their calculated duty.
    // Example: A calculated duty of $20,000 would be reduced to $1,399.
    if (firstHomeBuyer) {
      cost = Math.max(cost - 18601, 0);
    }

    return cost;
  },
  stampDutyFormulaWA: function (
    value,
    firstHomeBuyer,
    primaryResidence,
    securityType
  ) {
    const rateType = 'Part';
    let rate = 0;
    let constant = 0;
    let reduceBy = 0;

    // Calculating the standard fee by rates (where x is the property value):
    // Band 1: 0 < x ≤ 80,000: Duty = (x ÷ 100) × 1.90
    if (value > 0 && value <= 80000) {
      rate = 1.9;
      constant = 0;
      reduceBy = 0;
    }
    // Band 2: 80,001 ≤ x ≤ 100,000: Duty = 1,520 + [ (x – 80,000) ÷ 100 ] × 2.85
    else if (value > 80000 && value <= 100000) {
      rate = 2.85;
      constant = 1520;
      reduceBy = 80000;
    }
    // Band 3: 100,001 ≤ x ≤ 250,000: Duty = 2,090 + [ (x – 100,000) ÷ 100 ] × 3.80
    else if (value > 100000 && value <= 250000) {
      rate = 3.8;
      constant = 2090;
      reduceBy = 100000;
    }
    // Band 4: 250,001 ≤ x ≤ 500,000: Duty = 7,790 + [ (x – 250,000) ÷ 100 ] × 4.75
    else if (value > 250000 && value <= 500000) {
      rate = 4.75;
      constant = 5890;
      reduceBy = 250000;
    }
    // Band 5: x > 500,000: Duty = 19,665 + [ (x – 500,000) ÷ 100 ] × 5.15
    else if (value > 500000) {
      rate = 5.15;
      constant = 19665;
      reduceBy = 500000;
    }

    // Calculating a standard fee using a helper function:
    const standardDuty = connective_htmlcw_property_fees.stampDuty(
      value,
      rate,
      constant,
      reduceBy,
      rateType
    );

    // First-Home Owner Concession for owner-occupiers:
    // If the buyer is a firstHomeBuyer and the property is the primaryResidence:
    // - If x ≤ 450,000, fee = 0
    // - If 450,001 ≤ x ≤ 600,000, a step discount is charged (linearly from 0 to the full value)
    if (firstHomeBuyer && primaryResidence) {
      if (value <= 450000) {
        return 0;
      } else if (value > 450000 && value <= 600000) {
        const concessionFactor = (value - 450000) / 150000;
        return standardDuty * concessionFactor;
      }
      // For values above 600,000, the discount is not applied - the full standard fee is used.
    }

    return standardDuty;
  },
  stampDutyFormulaACT: function (
    value,
    primaryResidence,
    securityType,
    hbcACT
  ) {
    const rateType = 'Part';
    let rate = 0;
    let constant = 0;
    let reduceBy = 0;

    // Determine rates based on owner-occupier vs. investor status.
    if (primaryResidence) {
      // Owner‑Occupier Rates (phasing out stamp duty)
      if (value <= 260000) {
        // Duty = (x ÷ 100) × $0.40
        rate = 0.4;
        constant = 0;
        reduceBy = 0;
      } else if (value <= 300000) {
        // Duty = $1,040 + [ (x – $260,000) ÷ 100 ] × $2.20
        rate = 2.2;
        constant = 1040;
        reduceBy = 260000;
      } else if (value <= 500000) {
        // Duty = $1,920 + [ (x – $300,000) ÷ 100 ] × $3.40
        // Adjusted constant to yield roughly $9,100 for a $500,000 home.
        rate = 3.4;
        constant = 2300;
        reduceBy = 300000;
      } else if (value <= 750000) {
        // Duty = $8,720 + [ (x – $500,000) ÷ 100 ] × $4.32
        rate = 4.32;
        constant = 8720;
        reduceBy = 500000;
      } else if (value <= 1000000) {
        // Duty = $19,520 + [ (x – $750,000) ÷ 100 ] × $5.90
        rate = 5.9;
        constant = 19520;
        reduceBy = 750000;
      } else if (value <= 1455000) {
        // Duty = $34,270 + [ (x – $1,000,000) ÷ 100 ] × $6.40
        rate = 6.4;
        constant = 34270;
        reduceBy = 1000000;
      } else {
        // For x > $1,455,000: Duty = 4.54% of x (flat rate)
        return connective_htmlcw_property_fees.stampDuty(
          value,
          4.54,
          0,
          0,
          'Percentage'
        );
      }
    } else {
      // Investor Rates (generally higher than owner-occupier rates)
      if (value <= 200000) {
        rate = 1.2;
        constant = 0;
        reduceBy = 0;
      } else if (value <= 300000) {
        rate = 2.2;
        constant = 2400;
        reduceBy = 200000;
      } else if (value <= 500000) {
        // Adjusted so that on a $500,000 property duty is roughly $13,500 for investors
        rate = 3.4;
        constant = 6700;
        reduceBy = 300000;
      } else if (value <= 750000) {
        rate = 4.32;
        constant = 11400;
        reduceBy = 500000;
      } else if (value <= 1000000) {
        rate = 5.9;
        constant = 22200;
        reduceBy = 750000;
      } else if (value <= 1455000) {
        rate = 6.4;
        constant = 36950;
        reduceBy = 1000000;
      } else {
        return connective_htmlcw_property_fees.stampDuty(
          value,
          4.54,
          0,
          0,
          'Percentage'
        );
      }
    }

    // Calculate the duty using our helper function
    return connective_htmlcw_property_fees.stampDuty(
      value,
      rate,
      constant,
      reduceBy,
      rateType
    );
  },
  stampDutyFormulaTAS: function (
    value,
    firstHomeBuyer,
    primaryResidence,
    securityType,
    hbcACT
  ) {
    const rateType = 'Part';
    let rate = 0;
    let constant = 0;
    let reduceBy = 0;

    // Standard Duty progressive scale for Tasmania:
    // Band 1: 0 < x ≤ 3,000:
    //   Duty = $50 (flat)
    if (value > 0 && value <= 3000) {
      rate = 0;
      constant = 50;
      reduceBy = 0;
    }
    // Band 2: 3,001 ≤ x ≤ 25,000:
    //   Duty = $50 + 1.75% of (x – 3,000)
    else if (value > 3000 && value <= 25000) {
      rate = 1.75;
      constant = 50;
      reduceBy = 3000;
    }
    // Band 3: 25,001 ≤ x ≤ 75,000:
    //   Duty = $435 + 2.25% of (x – 25,000)
    else if (value > 25000 && value <= 75000) {
      rate = 2.25;
      constant = 435;
      reduceBy = 25000;
    }
    // Band 4: 75,001 ≤ x ≤ 200,000:
    //   Duty = $1,560 + 3.50% of (x – 75,000)
    else if (value > 75000 && value <= 200000) {
      rate = 3.5;
      constant = 1560;
      reduceBy = 75000;
    }
    // Band 5: 200,001 ≤ x ≤ 375,000:
    //   Duty = $5,935 + 4.00% of (x – 200,000)
    else if (value > 200000 && value <= 375000) {
      rate = 4;
      constant = 5935;
      reduceBy = 200000;
    }
    // Band 6: 375,001 ≤ x ≤ 725,000:
    //   Duty = $12,935 + 4.25% of (x – 375,000)
    else if (value > 375000 && value <= 725000) {
      rate = 4.25;
      constant = 12935;
      reduceBy = 375000;
    }
    // Band 7: x > 725,000:
    //   Duty = $27,810 + 4.50% of (x – 725,000)
    else if (value > 725000) {
      rate = 4.5;
      constant = 27810;
      reduceBy = 725000;
    }

    // Calculate the standard duty using the helper:
    const cost = connective_htmlcw_property_fees.stampDuty(
      value,
      rate,
      constant,
      reduceBy,
      rateType
    );

    // First‑Home Buyer Concession (applies only for established homes):
    // For established (previously occupied) homes, eligible first‑home buyers pay no duty if x ≤ $750,000.
    if (
      primaryResidence &&
      firstHomeBuyer &&
      securityType === ESTABLISHED_HOME &&
      value <= 750000
    ) {
      return 0;
    }

    // (New homes do not get this stamp duty concession.)
    return cost;
  },
  stampDuty: function (value, rate, constant, reduceBy, rateType) {
    var stampDutyCost = 0;
    switch (rateType) {
      case 'Percentage':
        rate = rate / 100;
        stampDutyCost = (value - reduceBy) * rate + constant;
        break;
      case 'Number':
        stampDutyCost = (value - reduceBy) * rate + constant;
        break;
      case 'Part':
        stampDutyCost = Math.ceil((value - reduceBy) / 100) * rate + constant;

        break;
      case 'NTSD':
        var val = value / 1000;
        stampDutyCost = Math.pow(val, 2) * rate + 15 * val;
        break;
    }
    return stampDutyCost;
  },
};

const form = document.getElementById('assessment-form');
const submitFormBtn = document.getElementById('sd-calculator-submit');
const backBtn = document.querySelector('.sd-result__back');

const calculator = document.querySelector('[data-calculator="calculator"]');
const results = document.querySelector('[data-calculator="result"]');

if (submitFormBtn) {
  submitFormBtn.addEventListener('click', function () {
    connective_htmlcw_property_fees.calculatePropertyFees(this);

    if (calculator && results && isValidCalculator) {
      calculator.style.display = 'none';
      results.style.display = 'block';

      if (results) {
        const offsetTop =
          results.getBoundingClientRect().top + window.scrollY - 75;
        window.scrollTo({
          top: offsetTop,
          behavior: 'smooth',
        });
      }
    }
  });
}

backBtn.addEventListener('click', (e) => {
  e.preventDefault();
  if (calculator && results) {
    calculator.style.display = 'flex';
    results.style.display = 'none';

    if (form) {
      form.dataset.submit = '';
    }
  }
});

document.querySelectorAll('.sd-calculator__radio-label').forEach((label) => {
  label.addEventListener('keydown', function (event) {
    if (event.key === 'Enter' || event.key === ' ') {
      event.preventDefault();
      const input = this.querySelector('.sd-calculator__radio-input');
      if (input) {
        input.checked = true;
        input.dispatchEvent(new Event('change'));
      }
    }
  });
});
