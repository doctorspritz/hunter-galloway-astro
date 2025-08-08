<?php
/**
 * Functions - Child theme custom functions
 */


/*****************************************************************************************************************
************************** Caution: do not remove or edit anything within this section **************************/

/**
 * Loads the Divi parent stylesheet.
 * Do not remove this or your child theme will not work unless you include a @import rule in your child stylesheet.
 */
function dce_load_divi_stylesheet() {
    wp_enqueue_style( 'divi-slider-style',  '/wp-content/themes/hunter-galloway/assets/css/swiper.min.css' );
    wp_enqueue_style( 'divi-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'divi-app-style',  '/wp-content/themes/hunter-galloway/assets/css/_app.css' );
    wp_enqueue_style( 'jqueryui_style', get_template_directory_uri() . '/css/jquery-ui.min.css' );

}
add_action( 'wp_enqueue_scripts', 'dce_load_divi_stylesheet' );

/**
 * Makes the Divi Children Engine available for the child theme.
 * Do not remove this or you will lose all the customization capabilities created by Divi Children Engine.
 */
require_once('divi-children-engine/divi_children_engine.php');

/****************************************************************************************************************/

function longtail_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Longtailux Area',
        'id'            => 'longtailux-widget',
        'before_widget' => '<div class="longtailux-widget" style="text-align: center; padding: 15px">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="longtailux-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'longtail_widgets_init' );

function my_wpcf7_form_elements($html) {
    $text = 'Please select from the list';
    $html = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $html);
    return $html;
}
add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');



// Disable srcset
function hgw_disable_srcset () {
    return 1;
}
add_filter('max_srcset_image_width', 'hgw_disable_srcset');

# Download svg file 
function allow_type($type) {
    $type['svg'] = 'image/svg+xml';
    return $type;
}
add_filter('upload_mimes', 'allow_type');

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme Header Menu'),
            'menu_title'    => __('Theme Header'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

function add_custom_css_version($src) {
    if (strpos($src, 'style.css') !== false) {
        $src = add_query_arg('ver', '4.4.10', $src); // change to any version you need
    }
    return $src;
}
add_filter('style_loader_src', 'add_custom_css_version');

// Enqueue scripts and styles
require_once get_stylesheet_directory() . '/enqueue-styles.php';
require_once get_stylesheet_directory() . '/enqueue-scripts.php';
?>
