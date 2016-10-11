<?php
// This file adds a code to display a handy information on the admin page.

/************* DEBUGGING ADMIN PAGES *****************/
// Disable default dashboard widgets
add_action( 'admin_head', 'wpse152619_dbg_dev' );
function wpse152619_dbg_dev() {
    global $pagenow;
    print_r( $pagenow );
    echo '<br>';
    print_r( $_GET[ 'taxonomy' ] );
    echo '<br>';
    $current_screen = get_current_screen();
    print_r( $current_screen->id );
}