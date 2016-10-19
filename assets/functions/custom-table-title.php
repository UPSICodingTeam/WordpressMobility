<?php
// This file adds a code to display custom table titles on the admin page.

/************* CUSTOM TABLE TITLES *****************/

/** TEMPLATE:

// Add custom column headers for [CPT-SLUG] page	
add_filter( 'manage_[cpt-slug]_posts_columns', 'set_custom_edit_[cpt-slug]_columns' );
add_action( 'manage_[cpt-slug]_posts_custom_column' , 'custom_[cpt-slug]_column', 10, 2 );

function set_custom_edit_[cpt-slug]_columns($columns) {
	unset( $columns['title'] );
    $columns['sent_by'] = __( 'Sent by', 'your_text_domain' );
    $columns['the_message'] = __('The Message', 'your_text_domain');
    $columns['email'] = __('Sender\'s Email', 'your_text_domain');
    return $columns;
}

function custom_[cpt-slug]_column( $column, $post_id ) {
    switch ( $column ) {
        case 'facultys_name' :
            $name = get_field('facultys_name'); 
            echo $name;
            break;
        
        case 'submitted' :
        	echo count( get_field('programmes_offered') );         
            break;
            
        case 'email' :
            echo get_post_field('post_modified', $post_id);
            break;
        default;

    }
}

	/// REPLACE the [cpt-slug] with appropriate custom post type slug
	/// Use 'unset' to remove columns

**/
// Add custom column headers for PROGRAMMES page

add_filter( 'manage_programmes_offered_posts_columns', 'set_custom_edit_programmes_offered_columns' );
add_action( 'manage_programmes_offered_posts_custom_column' , 'custom_programmes_offered_column', 10, 2 );

function set_custom_edit_programmes_offered_columns($columns) {
	unset( $columns['title'] );
	unset($columns['date']);
    $columns['facultys_name'] = __( 'Faculty', 'your_text_domain' );
    $columns['submitted'] = __('# of programmes submitted', 'your_text_domain');
    $columns['modified'] = __('Last modified date', 'your_text_domain');
    return $columns;
}

function custom_programmes_offered_column( $column, $post_id ) {
    switch ( $column ) {
        case 'facultys_name' :
            $name = get_field('facultys_name'); 
            echo $name;
            break;
        
        case 'submitted' :
        	echo count( get_field('programmes_offered') );         
            break;
            
        case 'modified' :
            echo the_modified_date();
            echo '&nbsp; at &nbsp;';
            echo the_modified_time();
            break;
        default;

    }
}

// Add custom column headers for COMMITTEE MEMBERS page

add_filter( 'manage_committee_posts_columns', 'set_custom_edit_committee_columns' );
add_action( 'manage_committee_posts_custom_column' , 'custom_committee_column', 10, 2 );

function set_custom_edit_committee_columns($columns) {
	unset( $columns['title'] );
	unset($columns['date']);
    $columns['name'] = __( 'Name', 'your_text_domain' );
    $columns['position'] = __('Position', 'your_text_domain');
    $columns['type'] = __('Membership Type', 'your_text_domain');
    return $columns;
}

function custom_committee_column( $column, $post_id ) {
    switch ( $column ) {
        case 'name' :
            $name = get_field('name'); 
            if ($name){
	            echo $name;
            } else {
	            echo 'Not available';
            }
            break;
        
		case 'position' :
            $position = get_field('position'); 
            if ($position){
	            echo $position;
            } else {
	            echo 'Not available';
            }
            break;
        
        case 'type' :
        	$type = get_field('staff_type');
        	if ($type == 'scm'){
	        	echo 'Steering Committee';
        	} elseif ($type == 'wcm'){
	        	echo 'Working Committee';
        	} else {
	        	echo 'Not available';
        	}        
            break;
        default;

    }
}

// Add custom column headers for SUMMER CAMPS page
add_filter( 'manage_summer_camp_posts_columns', 'set_custom_edit_summer_camp_columns' );
add_action( 'manage_summer_camp_posts_custom_column' , 'custom_summer_camp_column', 10, 2 );

function set_custom_edit_summer_camp_columns($columns) {
	unset( $columns['title'] );
	unset($columns['date']);
    $columns['course_title'] = __( 'Course Title', 'your_text_domain' );
    $columns['publish'] = __('Publish Status', 'your_text_domain');
    return $columns;
}

function custom_summer_camp_column( $column, $post_id ) {
    switch ( $column ) {
        case 'course_title' :
            $coursetitle = get_field('course_title');
            if($coursetitle){
	            echo $coursetitle;
            } else {
	            echo 'No data available';
            }
            break;
        
        case 'publish' :
        	$featured 	= get_post_status();
        	$link		= get_permalink();
        	if($featured == 'publish'){
        		echo '<a href="'.$link.'"><p  style="font-weight:bold; text-decoration:underline;">Published</p></a>';
        	} else {
	        	echo '<p style="font-weight:bold;">Under Review</p>';
	        	
        	}         
            break;
        default;

    }
}

// Add custom column headers for EXCHANGE PROGRAMMES page	
add_filter( 'manage_exchange_programmes_posts_columns', 'set_custom_edit_exchange_programmes_columns' );
add_action( 'manage_exchange_programmes_posts_custom_column' , 'custom_exchange_programmes_column', 10, 2 );

function set_custom_edit_exchange_programmes_columns($columns) {
	unset( $columns['title'] );
	unset( $columns['date']);
    $columns['programme_title'] = __( 'Programme Title', 'your_text_domain' );
    $columns['featured_course'] = __('Featured?', 'your_text_domain');
    return $columns;
}

function custom_exchange_programmes_column( $column, $post_id ) {
    switch ( $column ) {
        case 'programme_title' :
            $programmetitle = get_field('programme_title');
            if($programmetitle){
	            echo $programmetitle;
            } else {
	            echo 'No data available';
            }
            break;
        
        case 'featured_course' :
        	$featured = get_field('featured_course');
        	if($featured){
        		echo '<span class="dashicons dashicons-yes"></span>';
        	} else {
	        	echo '<span class="dashicons dashicons-no-alt"></span>';
        	}         
            break;
        default;

    }
}

// Add custom column headers for FACILITIES & SERVICES page	
add_filter( 'manage_facilities_posts_columns', 'set_custom_edit_facilities_columns' );
add_action( 'manage_facilities_posts_custom_column' , 'custom_facilities_column', 10, 2 );

function set_custom_edit_facilities_columns($columns) {
	unset( $columns['title'] );
	unset( $columns['date']);
    $columns['titlefs'] = __( 'Type of facilities/services', 'your_text_domain' );
    return $columns;
}

function custom_facilities_column( $column, $post_id ) {
    switch ( $column ) {
        case 'titlefs' :
            $name = get_field('title_of_facilityservice'); 
            echo $name;
            break;
        default;

    }
}

// Add custom column headers for APPLICATION page	
add_filter( 'manage_application_posts_columns', 'set_custom_edit_application_columns' );
add_action( 'manage_application_posts_custom_column' , 'custom_application_column', 10, 2 );

function set_custom_edit_application_columns($columns) {
	unset( $columns['title'] );
	unset( $columns['date']);
    $columns['applicantsname'] = __( 'Applicant\'s name', 'your_text_domain' );
    $columns['chosencourse'] = __('Course of choice', 'your_text_domain');
    $columns['email'] = __('Applicant\'s email', 'your_text_domain');
    $columns['doc'] = __('Applicant\'s proposal', 'your_text_domain');
    return $columns;
}

function custom_application_column( $column, $post_id ) {
	 		$post_object = get_field('choose_course_or_programme');
			$post = $post_object;
			setup_postdata( $post ); 
    switch ( $column ) {
        case 'applicantsname' :
            $name = get_field('name'); 
            echo $name;
            break;
        
        case 'chosencourse' :
            
			?>
		    <div>
		    	<p><?php echo $post_object->post_title; ?></p>
		    </div> <?php
		   
            break;
            
        case 'email' :
            echo get_field('email');
            break;
            
        case 'doc' :
        	$file = get_field('upload_proposal');
        	if($file){
	        	echo '<a target="blank" href="',$file['url'],'"><span class="dashicons dashicons-download"></span> Download document</a>';
        	} else {
	        	echo 'No document uploaded';
        	}
            break;
        default: ;
			wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
    }
}

// Add custom column headers for TESTIMONY page	
add_filter( 'manage_testimony_posts_columns', 'set_custom_edit_testimony_columns' );
add_action( 'manage_testimony_posts_custom_column' , 'custom_testimony_column', 10, 2 );

function set_custom_edit_testimony_columns($columns) {
	unset( $columns['title'] );
	unset($columns['date']);
    $columns['name'] = __( 'Testimony from', 'your_text_domain' );
    $columns['testimony'] = __('The testimony', 'your_text_domain');
    return $columns;
}

function custom_testimony_column( $column, $post_id ) {
    switch ( $column ) {
        case 'name' :
            $name = get_field('name_tes'); 
            echo $name;
            break;
        
        case 'testimony' :
        	echo get_field('testimony');         
			break;
        default: ;

    }
}

// Add custom column headers for TRIVIA page	
add_filter( 'manage_trivia_posts_columns', 'set_custom_edit_trivia_columns' );
add_action( 'manage_trivia_posts_custom_column' , 'custom_trivia_column', 10, 2 );

function set_custom_edit_trivia_columns($columns) {
	unset( $columns['title'] );
	unset($columns['date']);
    $columns['title-triv'] = __( 'Title', 'your_text_domain' );
    return $columns;
}

function custom_trivia_column( $column, $post_id ) {
    switch ( $column ) {
        case 'title-triv' :
            $name = get_field('trivia_title'); 
            echo $name;
            break;
        default: ;

    }
}

