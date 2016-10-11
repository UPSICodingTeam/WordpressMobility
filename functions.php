<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

///------ CUSTOM FUNCTIONS -------///

// Adds useful code for debugging admin interfaces 
//require_once(get_template_directory().'/assets/functions/admin-debug.php'); 

// Replace table titles in admin interfaces
require_once(get_template_directory().'/assets/functions/custom-table-title.php'); 

// Replace post titles in admin interfaces with titles from Custom Post Type
require_once(get_template_directory().'/assets/functions/custom-titles-settings.php'); 

// Add a custom Theme Setting Page
require_once(get_template_directory().'/assets/functions/option-page.php'); 






// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
require_once(get_template_directory().'/assets/functions/admin.php'); 

/* Disable WordPress Admin Bar for all users but admins. */
  show_admin_bar(false);
