<?php

// This file copies the custom titles of CPT into the_title in wpdb, so that it is searchable.

/************* CUSTOM COPY TITLE *****************/



/**
TEMPLATE:

// Copy the custom title on [cpt-slug] CPT to post title
function custom_post_type_title ( $post_id ) {
    global $wpdb;
    if ( get_post_type( $post_id ) == '[cpt-slug]' ) {
        $oldTitle = get_field('[cpt-slug-title]');
        $newTitle = $oldTitle;
        $where = array( 'ID' => $post_id );
        $wpdb->update( $wpdb->posts, array( 'post_title' => $newTitle ), $where );
    }
}
add_action( 'save_post', 'custom_post_type_title' );
	
///REPLACE [cpt-slug] && [cpt-slug-title] respectively

**/




function custom_post_type_title ( $post_id ) {
    global $wpdb;
    // Copy the custom title on SUMMER CAMPS CPT to post title
    if ( get_post_type( $post_id ) == 'summer_camp' ) {
        $oldTitle = get_field('course_title');
        $newTitle = $oldTitle;
        $where = array( 'ID' => $post_id );
        $wpdb->update( $wpdb->posts, array( 'post_title' => $newTitle ), $where );
    }
    // Copy the custom title on EXCHANGE PROGRAMMES CPT to post title
    if ( get_post_type( $post_id ) == 'exchange_programmes' ) {
        $oldTitle = get_field('programme_title');
        $newTitle = $oldTitle;
        $where = array( 'ID' => $post_id );
        $wpdb->update( $wpdb->posts, array( 'post_title' => $newTitle ), $where );
    }
}
add_action( 'save_post', 'custom_post_type_title' );