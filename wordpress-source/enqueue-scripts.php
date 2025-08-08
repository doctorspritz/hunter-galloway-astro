<?php

/**
 * Enqueue custom scripts.
 */

function enqueue_custom_scripts()
{
  // Global scripts
  wp_enqueue_script(
    'helpers',
    get_stylesheet_directory_uri() . '/assets/js/helpers.js',
    array(),
    '0.0.1',
    true
  );

  wp_enqueue_script(
    'header',
    get_stylesheet_directory_uri() . '/assets/js/header.js',
    array(),
    '0.0.3',
    true
  );

  // Enqueue scripts for home page
  if (is_front_page() || is_home()) {
    wp_enqueue_script(
      'front-page',
      get_stylesheet_directory_uri() . '/assets/js/pages/front-page.js',
      array(),
      '0.0.2',
      true
    );
  }
  // Enqueue scripts for the deposit calculator page
  if (is_page_template('post-deposit-calculator.php')) {


    wp_enqueue_script(
      'hc-deposit-calc-slider',
      'https://cdn.jsdelivr.net/jquery.nouislider/9.2.0/nouislider.min.js',
      array(),
      '9.2.0',
      true
    );
    wp_enqueue_script(
      'hc-deposit-calc-wnumb',
      'https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.1.0/wNumb.min.js',
      array(),
      '1.1.0',
      true
    );
    wp_enqueue_script(
      'hc-deposit-calc-autonumeric',
      'https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.10.6/autoNumeric.js',
      array(),
      '4.10.6',
      true
    );

    wp_enqueue_script(
      'calculate-deposit',
      get_stylesheet_directory_uri() . '/assets/js/calcs/calculate-deposit.js',
      array(),
      '0.0.8',
      true
    );
    wp_enqueue_script(
      'assessment-form-script',
      get_stylesheet_directory_uri() . '/assets/js/forms/assessment-form.js',
      array(),
      '0.0.4',
      true
    );
    wp_enqueue_script(
      'calculator-page-script',
      get_stylesheet_directory_uri() . '/assets/js/pages/calculator-page.js',
      array(),
      '0.0.11',
      true
    );

    $depositCalculatorOptions = get_field('deposit_calculator_options');
    wp_localize_script('calculate-deposit', 'depositOptions', $depositCalculatorOptions);
  }

  // Enqueue scripts for the stamp-duty calculator page
  if (is_page_template('post-stamp-duty-calculator.php')) {
    wp_enqueue_script(
      'calculator-page-script',
      get_stylesheet_directory_uri() . '/assets/js/pages/calculator-page.js',
      array(),
      '0.0.11',
      true
    );
  }

  if (is_page_template('post-stamp-duty-calculator.php') || is_page_template('post-stamp-duty-calculator-new-post-design.php')) {
    wp_enqueue_script(
      'assessment-form-script',
      get_stylesheet_directory_uri() . '/assets/js/forms/assessment-form.js',
      array(),
      '0.0.3',
      true
    );
  }
  if (is_page('get-a-stress-free-first-home-loan')) {
    wp_enqueue_script(
      'autonumeric',
      'https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.10.6/autoNumeric.js',
      array(),
      '4.10.6',
      true
    );
    wp_enqueue_script(
      'get-a-stress-free-first-home-loan-script',
      get_stylesheet_directory_uri() . '/assets/js/pages/get-a-stress-free-first-home-loan.js',
      array('autonumeric'),
      '0.0.7',
      true
    );
  }

  // Enqueue scripts for the blog page 
  if (is_page_template('blog.php')) {
    wp_enqueue_style(
      'blog-script',
      get_stylesheet_directory_uri() . '/assets/js/templates/blog.css',
      array(),
      '0.0.6',
    );
  }

  if (is_single() && !is_page_template()) {
    wp_enqueue_script(
      'single-script',
      get_stylesheet_directory_uri() . '/assets/js/templates/single.js',
      array(),
      '0.0.1',
      true
    );

    wp_enqueue_script(
      'blog-blocks-script',
      get_stylesheet_directory_uri() . '/assets/js/blog-blocks/index.js',
      array(),
      '1.0.2',
      true
    );
  }

  // Enqueue scripts for single-crs page
  if (is_page_template('single-crs.php')) {
    wp_enqueue_script(
      'single-crs-script',
      get_stylesheet_directory_uri() . '/assets/js/templates/single-crs.js',
      array(),
      '0.0.1',
      true
    );
  }
}


function enqueue_calculate_capacity_scripts()
{
  // Enqueue the custom scripts
  wp_enqueue_script(
    'calculate-capacity',
    get_stylesheet_directory_uri() . '/assets/js/calcs/calculate-capacity.js',
    array(),
    '0.0.2',
    true
  );
}

function enqueue_awards_block_scripts()
{

  wp_enqueue_script(
    'popperjs-core-script',
    'https://unpkg.com/@popperjs/core@2',
    array(),
  );
  wp_enqueue_script(
    'tippyjs-script',
    'https://unpkg.com/tippy.js@6',
    array(),
  );
  wp_enqueue_script(
    'awards-block-script',
    get_stylesheet_directory_uri() . '/assets/js/blocks/awards.js',
    array(),
    '0.0.1',
    true,
  );
}


function enqueue_calculate_stamp_duty_scripts()
{
  wp_enqueue_script(
    'hc-deposit-calc-autonumeric',
    'https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.10.6/autoNumeric.js',
    array(),
    '4.10.6',
    true
  );

  wp_enqueue_script(
    'calculate-stamp-duty',
    get_stylesheet_directory_uri() . '/assets/js/calcs/calculate-stamp-duty.js',
    array(),
    '0.0.1',
    true
  );
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
add_action('get_template_part_template-parts/calculators/calculate-capacity', 'enqueue_calculate_capacity_scripts');
add_action('get_template_part_template-parts/blocks/awards', 'enqueue_awards_block_scripts');
add_action('get_template_part_template-parts/calculators/calculate-stamp-duty', 'enqueue_calculate_stamp_duty_scripts');
