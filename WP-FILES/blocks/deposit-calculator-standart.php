<div class="hntr_calculators" id="hc_deposit_calculator">
  <div class="hc_title">
    Deposit Calculator
    <div class="hc_sub_title">
      An easy way to see how your deposit translates to your home price and
      monthly payment.
    </div>
  </div>
  <div class="hc_input_row">
    <div class="hc_input_cell">
      <div class="hc_input_label">Deposit ($) <span>(required)</span></div>
      <div class="hc_input_field">
        <input type="text" id="hcdc_deposit" value="50000" />
      </div>
    </div>
    <div class="hc_input_cell">
      <div class="hc_input_label">Rate (%) <span>(required)</span></div>
      <div class="hc_input_field">
        <input type="text" id="hcdc_rate" value="4" />
      </div>
    </div>
    <div class="hc_input_cell last_input_cell">
      <div class="hc_input_label">Term (Yrs) <span>(required)</span></div>
      <div class="hc_input_field">
        <input type="text" id="hcdc_term" value="30" />
      </div>
    </div>
    <div style="clear: left"></div>
  </div>
  <div class="hc_result_section">
    <div class="hc_result_title">Results:</div>
    <div class="hc_result_row">
      <div class="hc_result_cell">
        <div class="hc_input_label">Deposit Amount %:</div>
        <div id="hc_down_slider" class="hc_slider"></div>
        <div id="hc_down_slider_result" class="hc_result_value"></div>

      </div>
      <div class="hc_result_cell last_result_cell">
        <div class="hc_input_label">Home Price ($)</div>
        <div class="hc_result_value" id="hcdc_home_price">$</div>
        <div class="hc_input_label">Monthly Payment ($)</div>
        <div class="hc_result_value" id="hcdc_mnth_payment">$</div>

      </div>
      <div style="clear: left"></div>
    </div>
    <div class="hc_info_txt">
      <strong>How much deposit is needed?</strong><br />While putting a 20%
      deposit can improve your chances of getting approved, help you avoid
      Lenders Mortgage Insurance and possibly secure you a lower interest
      rate &#8211; you can buy a home with as little as 8-10% deposit
      &#8211; or none if you have the help of a guarantor!
    </div>
    <a
      href="https://www.huntergalloway.com.au/free-assessment/"
      class="hc_result_button">Get in touch with our team today</a>
  </div>
</div>
<style>
  #hc_deposit_calculator * {
    font-family: inherit;
    color: #444;
  }

  #hc_deposit_calculator {
    max-width: 630px;
    width: 100%;
    margin: 20px auto;
    background: #fff;
    box-sizing: border-box;
    position: relative;
    padding: 40px 34px;
    border-top: 8px solid #ffbe0c;
    box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.2);
    transition: all 0.2s ease;
  }

  #hc_deposit_calculator a.hc_result_button {
    position: relative;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    transition: all 0.2s;
    color: #fff !important;
    border-color: #ffae0c;
    border-radius: 19px;
    font-size: 20px;
    font-weight: 600 !important;
    background-color: #ffae0c;
    padding: 10px;
    text-align: center;
    display: inline-block;
    text-transform: capitalize;
    margin-top: 15px;
  }

  #hc_deposit_calculator a.hc_result_button:hover {
    background-color: #f2a50c;
    border-color: #f2a50c;
  }

  #hc_deposit_calculator .hc_title {
    margin: 5px 12px;
    padding: 0 0 30px;
    line-height: 1.166666667;
    font-size: 36px;
    text-align: left;
    font-weight: 700;
    border-bottom: 1px solid #ddd;
    text-transform: capitalize;
  }

  #hc_deposit_calculator .hc_sub_title {
    margin: 5px 0 0;
    padding: 0;
    line-height: 20px;
    font-size: 14px;
    text-align: left;
    font-weight: 400;
    border-bottom: none;
    text-transform: none;
  }

  #hc_deposit_calculator .hc_input_cell {
    float: left;
    width: 33.33%;
    padding-top: 15px;
    padding-left: 12px;
    padding-right: 12px;
  }

  #hc_deposit_calculator .hc_result_cell {
    float: left;
    width: 50%;
  }

  #hc_deposit_calculator .hc_result_cell.last_result_cell {
    padding-left: 30px;
  }

  #hc_deposit_calculator .hc_input_label {
    display: block;
    margin-bottom: 7px;
    font-size: 13px;
    line-height: 1.166666667;
    font-weight: 500;
    font-weight: 700;
  }

  #hc_deposit_calculator .hc_input_label span {
    padding-left: 0.25em;
    color: #94a2a8;
  }

  #hc_deposit_calculator input[type='text'] {
    max-width: 100%;
    font-size: 14px;
    height: 42px;
    line-height: 28px;
    caret-color: #ffbe0c;
    border-radius: 0.125rem !important;
    border: 1px solid #bdc6ca;
    color: #444;
    transition: color 0.15s ease-in-out;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    background-color: #fff;
    background-image: none;
    padding: 6px 12px;
    display: inline-block;
  }

  #hc_deposit_calculator .hc_result_title {
    font-weight: 700;
    font-size: 20px;
    line-height: 17px;
    padding-bottom: 25px;
  }

  #hc_deposit_calculator .hc_result_section {
    margin-top: 35px;
    margin-left: 12px;
    margin-right: 12px;
  }

  #hc_deposit_calculator .hc_result_value {
    color: #ffbe0c;
    font-size: 22px;
    font-weight: 700;
    line-height: 28px;
    margin-bottom: 12px;
  }

  #hc_deposit_calculator .noUi-horizontal {
    height: 8px;
    margin-top: 7px;
    margin-bottom: 20px;
  }

  #hc_deposit_calculator .noUi-target {
    background: #fff;
    border-radius: 15px;
    border: 1px solid #ece7e7;
    box-shadow: inset 0 1px 1px #f0f0f0, 0 3px 6px -5px #bbb;
    height: 12px;
    margin-bottom: 8px;
    margin-top: 15px;
  }

  #hc_deposit_calculator .noUi-handle:after,
  #hc_deposit_calculator .noUi-handle:before {
    content: none;
  }

  #hc_deposit_calculator .noUi-connect {
    box-shadow: rgba(51, 51, 51, 0.45) 0 0 3px inset;
    background: #ffbe0c;
    transition: background 450ms ease 0s;
  }

  #hc_deposit_calculator .noUi-horizontal .noUi-handle {
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

  #hc_deposit_calculator .hc_info_txt {
    font-size: 12px;
    color: #94a2a8;
    line-height: 20px;
  }

  @media all and (max-width: 630px) {

    #hc_deposit_calculator .hc_input_cell,
    #hc_deposit_calculator .hc_result_cell {
      float: none;
      width: 100%;
    }

    #hc_deposit_calculator .hc_result_cell.last_result_cell {
      padding-left: 0;
    }

    #hc_deposit_calculator .hc_info_txt {
      margin-bottom: 20px;
    }
  }
</style>

<!--calculator deposit end-->