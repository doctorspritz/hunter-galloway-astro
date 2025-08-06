<?php
$assets_folder = '/wp-content/themes/hunter-galloway/assets';
$img_folder = $assets_folder . '/img/img_new';
$default_state = isset($args['default_state']) ? $args['default_state'] : 'QLD';

$state_options = [
  'ACT' => 'ACT',
  'NSW' => 'NSW',
  'NT' => 'NT',
  'QLD' => 'QLD',
  'SA' => 'SA',
  'TAS' => 'TAS',
  'VIC' => 'VIC',
  'WA' => 'WA'
];
?>


<section class="sd-calculator" id="sd-calculator-section">
  <div class="sd-calculator__wrapper" data-calculator="calculator">
    <div class="sd-calculator__left">
      <h2 class="sd-calculator__title"><?php the_field('hg_post_subtitle'); ?></h2>
      <p class="sd-calculator__description">Answer a few questions about your situation to calculate your
        upfront costs.</p>
      <picture class="sd-calculator__bg">
        <source srcset="<?php echo esc_url($img_folder . '/stamp-duty-calculator-bg-mob.webp')  ?>" media="(max-width: 992px)">
        <source srcset="<?php echo esc_url($img_folder . '/stamp-duty-calculator-bg.webp')  ?>" media="(min-width: 993px)">
        <img src="<?php echo esc_url($img_folder . '/stamp-duty-calculator-bg.webp')  ?>" alt="Description of image" loading="lazy">
      </picture>
    </div>


    <div class="sd-calculator__right">
      <form class="sd-calculator__form" onsubmit="return false;">
        <div class="sd-calculator__form-control">
          <div class="sd-calculator__label">What state are you buying in?</div>
          <div class="sd-calculator__input-wrapper">
            <div class="sd-calculator__select--arrow">
              <select class="sd-calculator__select" id="connective-htmlcw-pf-state" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)">
                <!-- <option value="" disabled selected>Select a State</option> -->
                 <?php foreach ($state_options as $value => $label) : ?>
                  <option value="<?php echo esc_attr($value); ?>" <?php selected($default_state, $value); ?>><?php echo esc_html($label); ?></option>
                <?php endforeach; ?>
                <!-- The following options are hardcoded for backward compatibility -->
                <!-- <option value="ACT">ACT</option>
                <option value="NSW">NSW</option>
                <option value="NT">NT</option>
                <option value="QLD" selected>QLD</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="VIC">VIC</option>
                <option value="WA">WA</option> -->
              </select>
            </div>
          </div>
        </div>
        <div class="sd-calculator__form-control">
          <div class="sd-calculator__label">Property price</div>
          <label class="sd-calculator__input-wrapper">
            <input type="text" placeholder="e.g. 400,000" class="sd-calculator__input" id="connective-htmlcw-pf-property-price" value="" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)">
          </label>
        </div>
        <div id="connective-htmlcw-pf-property-purpose" class="sd-calculator__form-control">
          <div class="sd-calculator__label">What’s the property purpose</div>
          <div class="sd-calculator__radio-wrapper">
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" name="connective-htmlcw-pf-property-purpose-rb" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" value="Investment">
              <span>Investment</span>
            </label>
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" name="connective-htmlcw-pf-property-purpose-rb" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" value="Owner Occupied" checked="true">
              <span>To live in</span>
            </label>
          </div>
        </div>
        <div id="connective-htmlcw-pf-security-type" class="sd-calculator__form-control">
          <span class="sd-calculator__label">Security type</span>
          <div class="sd-calculator__radio-wrapper">
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" name="connective-htmlcw-pf-security-type-rb" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" value="New Home">
              <span>New home</span>
            </label>
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" name="connective-htmlcw-pf-security-type-rb" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" value="Established Home" checked="true">
              <span>Established home</span>
            </label>
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" name="connective-htmlcw-pf-security-type-rb" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" value="Vacant Land">
              <span>Vacant land</span>
            </label>
          </div>
        </div>
        <div id="connective-htmlcw-pf-transaction-type" class="sd-calculator__form-control" style="display:none;">
          <span class="sd-calculator__label">Transaction type</span>
          <div class="sd-calculator__radio-wrapper">
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" name="connective-htmlcw-pf-transaction-type-rb" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" value="Purchase" checked="true">
              <span>Purchase</span>
            </label>
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" name="connective-htmlcw-pf-transaction-type-rb" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" value="Refinance">
              <span>Refinance</span>
            </label>
          </div>
        </div>
        <div class="sd-calculator__form-control" id="connective-htmlcw-pf-first-home-buyer-label" >
          <div class="sd-calculator__label">Are you a first home buyer?</div>
          <div class="sd-calculator__radio-wrapper">
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" id="connective-htmlcw-pf-first-home-buyer" name="first_buyer" value="" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" checked="true">
              <span>Yes</span>
            </label>
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" name="first_buyer" data-value="no" value="" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)">
              <span>No</span>
            </label>
          </div>
        </div>
        <div class="sd-calculator__form-control" id="connective-htmlcw-pf-first-home-buyer-nsw-label" style="display: none;">
          <div class="sd-calculator__label">Are you a first home buyer?</div>
          <div class="sd-calculator__radio-wrapper">
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" id="connective-htmlcw-pf-first-home-buyer-nsw" name="first_buyer_home" value="" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)"  checked="true">
              <span>Yes</span>
            </label>
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" name="first_buyer_home" data-value="no" value="" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)">
              <span>No</span>
            </label>
          </div>
        </div>
        <div class="sd-calculator__form-control" id="connective-htmlcw-pf-home-buyer-concession-act-label" style="display: none;">
          <div class="sd-calculator__label">Are you a first home buyer?</div>
          <div class="sd-calculator__radio-wrapper">
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" id="connective-htmlcw-pf-home-buyer-concession-act" class="sd-calculator__radio-input" name="home_concession" value="" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" checked="true">
              <span>Yes</span>
            </label>
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" name="home_concession" data-value="no" value="" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" >
              <span>No</span>
            </label>
          </div>
        </div>
        <div class="sd-calculator__form-control" id="connective-htmlcw-pf-primary-residence-label">
          <div class="sd-calculator__label">Is this your primary residence?</div>
          <div class="sd-calculator__radio-wrapper">
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" id="connective-htmlcw-pf-primary-residence" name="primary_residence" value="" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" checked="true">
              <span>Yes</span>
            </label>
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" name="primary_residence" data-value="no" value="" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)">
              <span>No</span>
            </label>
          </div>
        </div>
        <div class="sd-calculator__form-control" id="connective-htmlcw-pf-foreign-buyer-label">
          <div class="sd-calculator__label">Are you a foreign purchaser?</div>
          <div class="sd-calculator__radio-wrapper">
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" name="foreign_buyer" id="connective-htmlcw-pf-foreign-buyer" value="" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)">
              <span>Yes</span>
            </label>
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" name="foreign_buyer" data-value="no" value="" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" checked="true">
              <span>No</span>
            </label>
          </div>
        </div>
        <div id="connective-htmlcw-pf-FHB-Choice-NSW" class="sd-calculator__form-control" style="display: none;">
          <span class="sd-calculator__label">FHB Choice (NSW)</span>
          <span class="sd-calculator__radio-wrapper">
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" id="connective-htmlcw-pf-FHB-Choice-NSW-stampDuty" name="connective-htmlcw-pf-FHB-Choice-NSW-rb" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" value="Stamp Duty" checked="checked">
              <span class="">Stamp
                Duty</span>
            </label>
            <label class="sd-calculator__radio-label" tabindex="0">
              <input type="radio" class="sd-calculator__radio-input" id="connective-htmlcw-pf-FHB-Choice-NSW-APT" name="connective-htmlcw-pf-FHB-Choice-NSW-rb" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" value="Annual Property Tax">
              <span class="">Annual
                Property Tax</span>
            </label>
          </span>

        </div>
        <div class="sd-calculator__form-control" id="connective-htmlcw-pf-land-value" style="display: none;">
          <div class="sd-calculator__label">Land Value</div>
          <div>
            <input type="number" min="0" max="99999999" maxlength="8" class="form-control connective-htmlcw-form-control connective-htmlcw-field-width" id="connective-htmlcw-pf-land-value1" value="" onchange="connective_htmlcw_property_fees.calculatePropertyFees(this)" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
            <span class=" connective-htmlcw-dollar-sign">$</span>
          </div>
        </div>
        <div class="sd-calculator__form-control">
          <button type="button" class="sd_calculator__submit btn_yellow" id="sd-calculator-submit">Calculate Upfront Costs</button>
        </div>
      </form>
    </div>
  </div>
  <div class="sd-calculator__result sd-result" data-calculator="result" style="display: none">
    <div class="sd-result__wrapper">
      <div class="sd-result__left">
        <div class="sd-result__block">
          <button class="sd-result__back" type="button"><span class="sd-result__back--desktop">Back</span><span class="sd-result__back--mobile">Recalculate</span></button>
          <div class="sd-result__block-content">
            <div class="sd-result__total">
              <div class="sd-result__row">
                <div class="sd-result__label ">Total Government Fees will be</div>
                <div class="sd-result__value " id="connective-htmlcw-pf-total">$0</div>
              </div>
            </div>
            <div class="sd-result__regular">
              <div class="sd-result__row">
                <div class="sd-result__label "> Purchase stamp duty </div>
                <div class="sd-result__value" id="connective-htmlcw-pf-purchase-stamp-duty">$0</div>
              </div>
              <div class="sd-result__row foreign-buyer-display-span" style="display: none;">
                <div class="sd-result__label ">Foreign buyer </div>
                <div class="sd-result__value" id="connective-htmlcw-pf-foreign-buyer-fee">$0</div>
              </div>
              <div class="sd-result__row">
                <div class="sd-result__label "> Transfer fee </div>
                <div class="sd-result__value" id="connective-htmlcw-pf-transfer-fee">$0</div>
              </div>
              <div class="sd-result__row">
                <div class="sd-result__label "> Mortgage registration fee </div>
                <div class="sd-result__value" id="connective-htmlcw-pf-registration-fee">$0</div>
              </div>
              <div class="sd-result__row" style="display: none;" id="connective-htmlcw-pf-APT-Total-section">
                <div class="sd-result__label annual-property-tax-display-span ">Annual Property Tax</div>
                <div class="sd-result__value" id="connective-htmlcw-pf-APT-Total"></div>
              </div>
              <br id="connective-htmlcw-pf-APT-Total-section">
            </div>
          </div>
        </div>
        <div class="sd-result__title"><b>Discover</b> how to minimize your upfront costs with a <span>free, personalized assessment</span> of your situation.</div>
        <div class="sd-result__content">
          <h4 class="sd-result__content-title">This includes:</h4>
          <ul class="sd-result__content-list sd-result__list">
            <li class="sd-result__list-item">Finding the best deal for you from over 30 Australian banks and lenders</li>
            <li class="sd-result__list-item">Providing personalised advice with the best loan options for your needs</li>
            <li class="sd-result__list-item">Helping you understand the process and what to do next</li>
          </ul>
        </div>
      </div>
      <div class="sd-result__right">
        <div class="sd-result__form"><?php include(get_stylesheet_directory() . '/blocks/assessment-form.php') ?></div>
        <div class="sd-result__badges"><?php include(get_stylesheet_directory() . '/blocks/badges.php') ?></div>
        <div class="sd-result__bg">
          <img src="<?php echo esc_url($img_folder . '/stamp-duty-calculator-bg.webp')  ?>" alt="" width="608" height="831" loading="lazy">
        </div>
        <img class="sd-result__arrow" src="<?php echo esc_url($img_folder . '/form-arrow.webp') ?>" alt="" width="69" height="69" loading="lazy">
      </div>
    </div>
    <div class="sd-result__awards">
      <?php include(get_stylesheet_directory() . '/blocks/awards.php') ?>
    </div>
    <div class="sd-result__notes">
      <p>
        Calculations are estimates provided as a guide only, and are not a loan approval. Applications are subject to credit approval, satisfactory security and minimum deposit requirements. Conditions apply to all loan options.
      </p>
      <p>Hunter Galloway Finance Pty Ltd T/A Mortgage Broker Brisbane - Hunter Galloway ABN 20 605 252 926.Credit Representative 476903 is authorised under Australian Credit Licence 389328. Your full financial situation would need to be reviewed prior to acceptance of any offer or product.</p>
    </div>
  </div>
</section>