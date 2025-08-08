<?php
$calculatorFields = get_field('deposit_calculator_options');
$rateDefaultValue = isset($calculatorFields['rate_default_value']) && $calculatorFields['rate_default_value'] !== ''
  ? $calculatorFields['rate_default_value']
  : '4';
$termDefaultValue = isset($calculatorFields['term_default_value']) && $calculatorFields['term_default_value'] !== ''
  ? $calculatorFields['term_default_value']
  : '30';

?>

<div class="dp-result" id="hc_deposit_calculator_custom">
  <div class="dp-result__title">
    Calculate how much you need to deposit for your home loan
  </div>

  <div class="dp-result__outcome">
    <div>
      <div class="dp-result__label">Your monthly payment will be:</div>
      <div class="dp-result__value" id="hcdc_mnth_payment">$</div>

    </div>
    <div>
      <div class="dp-result__label">Home Price ($)</div>
      <div class="dp-result__value" id="hcdc_home_price">$</div>
    </div>

  </div>
  <div class="dp-result__row">
    <div class="dp-result__input-wrap dp-result__input-wrap--deposit">
      <div class="dp-result__label">Enter the amount of your deposit</div>
      <div class="hc_input_field" data-title="$">
        <input type="text" id="hcdc_deposit" value="50000" />
      </div>
    </div>
  </div>
  <div class="dp-result__row">
    <div class="dp-result__input-wrap">
      <div class="dp-result__label">Rate <span>(required)</span></div>
      <div class="hc_input_field" data-title="%">
        <input type="text" id="hcdc_rate" value="<?php echo esc_attr($rateDefaultValue) ?>" />
      </div>
    </div>
    <div class="dp-result__input-wrap">
      <div class="dp-result__label">Term <span>(required)</span></div>
      <div class="hc_input_field" data-title="Yrs">
        <input type="text" id="hcdc_term" value="<?php echo esc_attr($termDefaultValue) ?>" />
      </div>
    </div>
  </div>


  <div class="dp-result__row">
    <div style="width: 100%;">
      <div style="position: relative;">
        <div class="dp-result__label">Deposit Amount %:</div>
        <div id="hc_down_slider" class="hc_slider"></div>
      </div>

    </div>
  </div>
</div>
<style>
  #hc_deposit_calculator_custom .noUi-horizontal {
    height: 8px;
    margin-top: 7px;
    margin-bottom: 20px;
  }

  #hc_deposit_calculator_custom .noUi-target {
    background: #fff;
    border-radius: 15px;
    border: 1px solid #ece7e7;
    box-shadow: inset 0 1px 1px #f0f0f0, 0 3px 6px -5px #bbb;
    height: 12px;
    margin-bottom: 8px;
    margin-top: 15px;
  }

  #hc_deposit_calculator_custom .noUi-handle:after,
  #hc_deposit_calculator_custom .noUi-handle:before {
    content: none;
  }

  #hc_deposit_calculator_custom .noUi-connect {
    box-shadow: rgba(51, 51, 51, 0.45) 0 0 3px inset;
    background: #ffbe0c;
    transition: background 450ms ease 0s;
    border-radius: 15px;
  }

  #hc_deposit_calculator_custom .noUi-horizontal .noUi-handle {
    width: 25px;
    height: 25px;
    left: -17px;
    top: -8px;
    border: 1px solid #ccc;
    border-radius: 50%;
    background: #fff;
    cursor: pointer;
    padding-top: 7px;
    box-shadow: inset 0 0 1px #fff, inset 0 1px 7px #ebebeb, 0 3px 6px -3px #bbb;
  }

  #hc_deposit_calculator_custom #hc_down_slider_result {
    position: absolute;
    width: fit-content;
    top: 100%;
    left: calc(33.33% - 4px);
    transform: translateX(-50%);
    border-radius: 2px;
    border: 1px solid var(--Gray-200, #EEE);
    background: var(--White, #FFF);
    box-shadow: 0px 6px 8px 0px rgba(0, 0, 0, 0.08);
    padding: 4px 7px;
    color: var(--Grey-dark, #262626);
    font-family: "Open Sans";
    font-size: 14px;
    font-style: normal;
    font-weight: 600;
    line-height: 20px;
    z-index: 3;

  }

  @media (max-width: 768px) {
    #hc_deposit_calculator_custom #hc_down_slider_result {
      display: none;
    }
  }
</style>

<!--calculator deposit end-->