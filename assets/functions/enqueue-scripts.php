<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    
    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );
    
    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/vendor/foundation-sites/dist/foundation.min.js', array( 'jquery' ), '6.0', true );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
    
     // Register Motion-UI
    wp_enqueue_style( 'motion-ui-css', get_template_directory_uri() . '/vendor/motion-ui/dist/motion-ui.min.css', array(), '', 'all' );
	
	// Select which grid system you want to use (Foundation Grid by default)
    wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/vendor/foundation-sites/dist/foundation.min.css', array(), '', 'all' );
     //wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/vendor/foundation-sites/dist/foundation-flex.min.css', array(), '', 'all' );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);


/**
 * Register and enqueue a custom stylesheet in the WordPress admin.
 */
 
function wpdocs_enqueue_custom_admin_script() {
        wp_register_script( 'd3js', get_template_directory_uri() . '/assets/js/d3.js', false, '1.0.0' );
        wp_enqueue_script( 'd3js' );
        wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/vendor/foundation-sites/dist/admin/foundation.min.js', array( 'jquery' ), '6.0', true );
        wp_enqueue_script( 'fontawesomeCDN', '//use.fontawesome.com/3e0e650a0e.js', array(''), '', true );
        wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/vendor/foundation-sites/dist/admin/foundation.min.css', array(), '', 'all' );
        
        
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_script' );
