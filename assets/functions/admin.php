<?php
// This file handles the admin area and functions - You can use this file to make changes to the dashboard.

/************* DASHBOARD WIDGETS *****************/
// Disable default dashboard widgets
function disable_default_dashboard_widgets() {
	remove_meta_box('dashboard_right_now', 'dashboard', 'core');    	// Right Now Widget
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core'); // Comments Widget
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');  // Incoming Links Widget
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');         // Plugins Widget

	remove_meta_box('dashboard_quick_press', 'dashboard', 'core');  	// Quick Press Widget
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');   // Recent Drafts Widget
	remove_meta_box('dashboard_primary', 'dashboard', 'core');         //
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');       //
	remove_meta_box('dashboard_activity', 'dashboard', 'normal'); 		//Removes the 'Activity' widget

	// Removing plugin dashboard boxes
	remove_meta_box('yoast_db_widget', 'dashboard', 'normal');         // Yoast's SEO Plugin Widget

}

/*
For more information on creating Dashboard Widgets, view:
http://digwp.com/2010/10/customize-wordpress-dashboard/
*/


// Calling all custom dashboard widgets
//function joints_custom_dashboard_widgets() {
		//wp_add_dashboard_widget('joints_rss_dashboard_widget', __('Custom RSS Feed (Customize in admin.php)', 'jointswp'), 'joints_rss_dashboard_widget');
	
	/*
	Be sure to drop any other created Dashboard Widgets
	in this function and they will all load.
	*/
//}

// removing the dashboard widgets
add_action('admin_menu', 'disable_default_dashboard_widgets');
// adding any custom widgets
//add_action('wp_dashboard_setup', 'joints_custom_dashboard_widgets');

/************* CUSTOMIZE ADMIN *******************/
// Custom Backend Footer
function joints_custom_admin_footer() {
	_e('<span id="footer-thankyou">Developed by Dr Hafiz Hanif, for <a href="#" target="_blank">Mobility Unit, UPSI</a></span>.', 'jointswp');
}

// adding it to the admin area
add_filter('admin_footer_text', 'joints_custom_admin_footer');

/////.....................................////

// Dashboard Widget for # of Published Courses and Programmes
function custom_dashboard_widget() {
	
	$summer_count  		= wp_count_posts('summer_camp');
	$number_sum			= $summer_count->publish;
	$exchange_count		= wp_count_posts('exchange_programmes');
	$number_ex			= $exchange_count->publish;
	
	echo "
	<div class='row text-center'>
		<div class='small-6 columns'>
			<p style='font-size:10em; font-weight:bold; margin: 0px; '>",$number_sum,"</p>
		</div>
		<div class='small-6 columns'>
			<p style='font-size:10em; font-weight:bold; margin: 0px; '>",$number_ex,"</p>
		</div>
	</div>
	<div class='row text-center'>
		<div class='small-6 columns'>
			<p style='font-size:1em; margin: 0px; '>Summer Camps</p>
		</div>
		<div class='small-6 columns'>
			<p style='font-size:1em; margin: 0px; '>Exchange Programmes</p>
		</div>
	</div>";
}
function add_custom_dashboard_widget() {
	wp_add_dashboard_widget('custom_dashboard_widget', 'Number of Published Courses and Programmes', 'custom_dashboard_widget');
}
add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');

// Dashboard Widget for # of Courses & Programmes Under Review
function custom_dashboard_widget1() {
	$summer_count  		= wp_count_posts('summer_camp');
	$number_sum			= $summer_count->draft;
	$exchange_count		= wp_count_posts('exchange_programmes');
	$number_ex			= $exchange_count->draft;
	
	echo "
	<div class='row text-center'>
		<div class='small-6 columns'>
			<p style='font-size:10em; font-weight:bold; margin: 0px; '>",$number_sum,"</p>
		</div>
		<div class='small-6 columns'>
			<p style='font-size:10em; font-weight:bold; margin: 0px; '>",$number_ex,"</p>
		</div>
	</div>
	<div class='row text-center'>
		<div class='small-6 columns'>
			<p style='font-size:1em; margin: 0px; '>Summer Camps</p>
		</div>
		<div class='small-6 columns'>
			<p style='font-size:1em; margin: 0px; '>Exchange Programmes</p>
		</div>
	</div>";
}
function add_custom_dashboard_widget1() {
	wp_add_dashboard_widget('custom_dashboard_widget1', 'Number of Courses and Programmes Under Review', 'custom_dashboard_widget1');
}
add_action('wp_dashboard_setup', 'add_custom_dashboard_widget1');

// Dashboard Widget for # of Applications
function custom_dashboard_widget2() {
	$application_count  	= wp_count_posts('application');
	$number_app			   	= $application_count->publish;

	
	echo "
	<div class='row text-center'>
		<div class='small-6 columns'>
			<p style='font-size:10em; font-weight:bold; margin: 0px; '>",$number_app,"</p>
		</div>
		<div class='small-6 columns'>
			<p style='font-size:10em; font-weight:bold; margin: 0px; '>",$number_ex,"</p>
		</div>
	</div>
	<div class='row text-center'>
		<div class='small-6 columns'>
			<p style='font-size:1em; margin: 0px; '>Submitted</p>
		</div>
		<div class='small-6 columns'>
			<p style='font-size:1em; margin: 0px; '>Processed</p>
		</div>
	</div>";
}
function add_custom_dashboard_widget2() {
	wp_add_dashboard_widget('custom_dashboard_widget2', 'Number of Student Applications', 'custom_dashboard_widget2');
}
add_action('wp_dashboard_setup', 'add_custom_dashboard_widget2');

