<?php
$img_folder = get_stylesheet_directory_uri() . '/assets/img/img_new';
?>

<section id="dp-calculator-section" class="dp-calculator">
  <div class="dp-calculator__steps">
    <div class="dp-calculator__step" data-step="1" style="display: block;">
      <div class="dp-calculator__entry dp-entry">
        <div class="dp-calculator__top-note">You might need less deposit than you think</div>
        <div class="dp-entry__form">
          <h2>Calculate how much you need to deposit for your home loan</h2>
          <div class="dp-entry__form-row">
            <div class="dp-entry__form-group">
              <label for="entry-deposit">Enter the amount of your deposit</label>
              <div class="dp-entry__input-wrap">
                <input id="entry-deposit" type="text" class="input-banner lazyloaded" oninput="addCommas(this)" placeholder="e.g. 50,000">
              </div>
            </div>
            <button class="btn_yellow btn_calculate" id="dp-entry-calculate">Calculate <img src="/wp-content/themes/hunter-galloway/assets/img/img_new/16_arrow_r_black.svg" alt="arrow image" style="margin: 0 0 0 8px!important;"></button>
          </div>
          <div class="dp-entry__error" id="dp-entry__error"></div>
        </div>
        <div class="dp-entry__badges">
          <?php include(get_stylesheet_directory() . '/blocks/badges.php') ?>
        </div>
      </div>
    </div>
    <div class="dp-calculator__step" data-step="2" style="display: none;">
      <div class="dp-calculator__form-wrap dp-form">
        <div class="dp-form__left">
          <div class="dp-form__left-inner">
            <?php include(get_stylesheet_directory() . '/blocks/deposit-calculator.php') ?>
          </div>
        </div>
        <div class="dp-form__right">
          <div class="dp-form__right-inner">
            <div class="dp-form__title">
              <b>Get the best home loan options and rates</b> for your <span id="dp-form-deposit">${50,000}</span> deposit today!
            </div>
            <div class="dp-form__form-wrap">
              <?php include(get_stylesheet_directory() . '/blocks/assessment-form.php') ?>

            </div>
            <div class="dp-form__info">
              <div>This includes: </div>
              <ul>
                <li>Finding the best deal for you from over 30 Australian banks and lenders</li>
                <li>Providing personalised advice with the best loan options for your needs</li>
                <li>Helping you understand the process and what to do next</li>
              </ul>
            </div>
            <img class="dp-form__arrow" src="<?php echo esc_url($img_folder . '/form-arrow.webp') ?>" alt="" width="69" height="69" loading="lazy">
          </div>
          <div class="dp-form__badges">
            <?php include(get_stylesheet_directory() . '/blocks/badges.php') ?>
          </div>
        </div>
      </div>
    </div>
    <picture class="dp-calculator__bg">
      <source srcset="<?php echo esc_url($img_folder . '/dp-calculator-bg-mob.webp') ?>" media="(max-width: 992px)">
      <source srcset="<?php echo esc_url($img_folder . '/dp-calculator-bg.webp') ?>" media="(min-width: 993px)">
      <img src="<?php echo esc_url($img_folder . '/dp-calculator-bg.webp') ?>" alt="" width="1440" height="657" loading="lazy">
    </picture>
  </div>
</section>
<div class="dp-calculator__awards">
  <?php include(get_stylesheet_directory() . '/blocks/awards.php') ?>
</div>