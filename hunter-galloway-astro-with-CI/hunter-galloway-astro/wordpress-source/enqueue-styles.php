<?php

/**
 * Enqueue custom styles.
 */

function enqueue_custom_styles()
{

  // Enqueue global styles
  wp_enqueue_style(
    'header-style',
    get_stylesheet_directory_uri() . '/assets/css/header.css',
    array(),
    '0.0.2'
  );

  // Enqueue styles for home page
  if (is_front_page()) {
    wp_enqueue_style(
      'front-page-style',
      get_stylesheet_directory_uri() . '/assets/css/pages/front-page.css',
      array(),
      '0.0.111',
    );
  }


  // Enqueue styles for the deposit calculator page
  if (is_page_template('post-deposit-calculator.php')) {
    wp_enqueue_style(
      'hc-deposit-calc-style',
      'https://cdn.jsdelivr.net/jquery.nouislider/9.2.0/nouislider.min.css'
    );
    wp_enqueue_style(
      'assessment-form-style',
      get_stylesheet_directory_uri() . '/assets/css/assessment-form.css',
      array(),
      '0.0.6',
    );
    wp_enqueue_style(
      'calculate-deposit-section-style',
      get_stylesheet_directory_uri() . '/assets/css/calculate-deposit-section.css',
      array(),
      '0.0.14',
    );
  }
  // Enqueue styles for the stamp-duty calculator page
  if (is_page_template('post-stamp-duty-calculator.php') || is_page_template('post-stamp-duty-calculator-new-post-design.php')) {

    wp_enqueue_style(
      'assessment-form-style',
      get_stylesheet_directory_uri() . '/assets/css/assessment-form.css',
      array(),
      '0.0.5',
    );
  }

  // Enqueue styles for the blog page 
  if (is_page_template('blog.php')) {
    wp_enqueue_style(
      'blog-style',
      get_stylesheet_directory_uri() . '/assets/css/templates/blog.css',
      array(),
      '0.0.6',
    );
  }

  if (is_single() && !is_page_template()) {
    wp_enqueue_style(
      'single-style',
      get_stylesheet_directory_uri() . '/assets/css/templates/single.css',
      array(),
      '0.0.3',
    );
  }

  // Enqueue styles for get a stress-free first home loan page
  if (is_page('get-a-stress-free-first-home-loan')) {
    wp_enqueue_style(
      'get-a-stress-free-first-home-loan-style',
      get_stylesheet_directory_uri() . '/assets/css/pages/lp-fhl.css',
      array(),
      '0.0.9',
    );
  }


  // Enqueue styles for the ready to upgrade, your property investment journey, and lower your rate pages
  if (is_page('ready-to-upgrade') || is_page('your-property-investment-journey') || is_page('lower-your-rate')) {
    wp_enqueue_style(
      'ready-to-upgrade-style',
      get_stylesheet_directory_uri() . '/assets/css/pages/lp.css',
      array(),
      '0.0.9',
    );
  }

  // Enqueue styles for the mortgage vs rent calculator page
  if (is_page('mortgage-vs-rent-calculator')) {
    wp_enqueue_style(
      'mortgage-vs-rent-calculator-style',
      get_stylesheet_directory_uri() . '/assets/css/pages/mortgage-vs-rent-calculator.css',
      array(),
      '0.0.9',
    );
  }
}


function enqueue_calculate_capacity_styles()
{
  // Enqueue the custom scripts
  wp_enqueue_style(
    'calculate-capacity-style',
    get_stylesheet_directory_uri() . '/assets/css/blocks/calculate-capacity.css',
    array(),
    '0.0.11',
  );
}

function enqueue_awards_block_styles()
{
  wp_enqueue_style(
    'tippy-svg-arrow-style',
    'https://unpkg.com/tippy.js@6/dist/svg-arrow.css',
    array(),
  );
  wp_enqueue_style(
    'tippy-border-style',
    'https://unpkg.com/tippy.js@6/dist/border.css',
    array(),
  );
  wp_enqueue_style(
    'awards-block-style',
    get_stylesheet_directory_uri() . '/assets/css/blocks/awards.css',
    array(),
    '0.0.1',
  );
}

function enqueue_awards_section_styles()
{

  wp_enqueue_style(
    'awards-section-style',
    get_stylesheet_directory_uri() . '/assets/css/sections/awards.css',
    array(),
    '0.0.1',
  );
}

function enqueue_calculate_stamp_duty_styles()
{
  wp_enqueue_style(
    'calculate-stamp-duty-style',
    get_stylesheet_directory_uri() . '/assets/css/calculators/stamp-duty-calculator.css',
    array(),
    '0.0.1',
  );
}


add_action('wp_enqueue_scripts', 'enqueue_custom_styles', 100);
add_action('get_template_part_template-parts/calculators/calculate-capacity', 'enqueue_calculate_capacity_styles');
add_action('get_template_part_template-parts/blocks/awards', 'enqueue_awards_block_styles');
add_action('get_template_part_template-parts/sections/awards-section', 'enqueue_awards_section_styles');
add_action('get_template_part_template-parts/calculators/calculate-stamp-duty', 'enqueue_calculate_stamp_duty_styles');
