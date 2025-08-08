<?php

/**
 * Google Rating block
 */

$blockCssURL = get_stylesheet_directory_uri() . '/assets/css/blocks/rating.css';
$googleIconURL = get_stylesheet_directory_uri() . '/assets/img/pages/google-icon.svg';
$ratedIconURL = get_stylesheet_directory_uri() . '/assets/img/pages/1-rated.svg';
?>

<link rel="stylesheet" href="<?php echo esc_url($blockCssURL . '?v=0.0.1'); ?>">

<div class="lp-rating">
  <div class="google-rating">
    <div class="google-rating__icon">
      <img src="<?php echo esc_attr($googleIconURL) ?>" alt="" width="54" height="54" loading="lazy">
    </div>
    <div class="google-rating__content">
      <div class="google-rating__title">Excellent on Google</div>
      <div class="google-rating__stars-container">
        <div class="google-rating__rating">5.0</div>
        <div class="google-rating__stars"></div>
      </div>
      <div class="google-rating__reviews">Based on 1,000+ reviews</div>
    </div>
  </div>
  <div class="mortgage-rating">
    <div class="mortgage-rating__icon">
      <img src="<?php echo esc_attr($ratedIconURL) ?>" alt="" width="51" height="44" loading="lazy">
    </div>
    <div class="mortgage-rating__content">
      <div class="mortgage-rating__rated">Rated</div>
      <div class="mortgage-rating__title">Mortgage Broker in Brisbane</div>
      <div class="mortgage-rating__reviews">with highest approval rate</div>
    </div>
  </div>
</div>