<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

show_admin_bar(false);

add_action( 'admin_init', function() {
  if ( ! current_user_can( 'manage_options' ) && ('/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF']) ) {
    wp_redirect( home_url() );
    exit;
  }
});

/**
 * Setup ACF JSON
 * - manually set path to 'acf-json' because it doesn't work out of the box
 */
add_filter('acf/settings/save_json', function($path) {
    $path = get_stylesheet_directory() . '/resources/acf-json';
    return $path;
});
add_filter('acf/settings/load_json', function($paths) {
    $paths = [];
    $paths[] = get_stylesheet_directory() . '/resources/acf-json';
    return $paths;
});

add_filter( 'acf/fields/wysiwyg/toolbars' , function($toolbars) {
	// Uncomment to view format of $toolbars
	/*
	echo '< pre >';
		print_r($toolbars);
	echo '< /pre >';
	die;
	*/

	// Add a new toolbar called "Very Simple"
	// - this toolbar has only 1 row of buttons
	$toolbars['Very Simple' ] = array();
	$toolbars['Very Simple' ][1] = array('link');

	// Edit the "Full" toolbar and remove 'code'
	// - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key
	if( ($key = array_search('code' , $toolbars['Full' ][2])) !== false )
	{
	  unset( $toolbars['Full'][2][$key] );
	}

	// remove the 'Basic' toolbar completely
	unset( $toolbars['Basic'] );

	// return $toolbars - IMPORTANT!
	return $toolbars;
});

add_filter( 'get_the_archive_title', function ($title) {
  if ( is_category() ) {
      $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
      $title = single_tag_title( '', false );
  } elseif ( is_author() ) {
      $title = '<span class="vcard">' . get_the_author() . '</span>' ;
  } elseif ( is_tax() ) { //for custom post types
      $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
  } elseif (is_post_type_archive()) {
      $title = post_type_archive_title( '', false );
  }
  return $title;
});
