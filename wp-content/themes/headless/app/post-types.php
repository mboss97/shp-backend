<?php

/**
 * Team
 */

function custom_post_type_team() {

  $name = 'Team Members';
  $plural = 'Team Members';
  $singular = 'Team';

  $labels = array(
    'name'                  => _x( $name, 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( $singular, 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( $name, 'text_domain' ),
    'name_admin_bar'        => __( $name, 'text_domain' ),
    'archives'              => __( $singular . ' Archives', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent ' . $singular .  ':', 'text_domain' ),
    'all_items'             => __( 'All ' . $plural, 'text_domain' ),
    'add_new_item'          => __( 'Add New ' . $singular, 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New ' . $singular, 'text_domain' ),
    'edit_item'             => __( 'Edit ' . $singular, 'text_domain' ),
    'update_item'           => __( 'Update ' . $singular, 'text_domain' ),
    'view_item'             => __( 'View ' . $singular, 'text_domain' ),
    'search_items'          => __( 'Search ' .$singular, 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this ' . $singular, 'text_domain' ),
    'items_list'            => __( $plural . ' list', 'text_domain' ),
    'items_list_navigation' => __( $plural . ' list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter ' . $plural . ' list', 'text_domain' ),
  );

  $args = array(
    'label'                 => __( $name, 'text_domain' ),
    'description'           => __( '', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'thumbnail', 'page-attributes', 'editor' ),
    'taxonomies'            => array( 'location' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 4,
    'menu_icon'             => 'dashicons-groups',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'show_in_rest'          => true,
    'rewrite'               => array( 'slug' => 'team', 'with_front' => false ),
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_graphql'       => true,
    'graphql_single_name'   => 'team',
    'graphql_plural_name'   => 'teamMembers'
  );

  register_post_type( 'team', $args );

}
add_action( 'init', 'custom_post_type_team', 0 );


/**
 * Jobs
 */

function custom_post_type_job() {

  $name = 'Jobs';
  $plural = 'Jobs';
  $singular = 'Job';

  $labels = array(
    'name'                  => _x( $name, 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( $singular, 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( $name, 'text_domain' ),
    'name_admin_bar'        => __( $name, 'text_domain' ),
    'archives'              => __( $singular . ' Archives', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent ' . $singular .  ':', 'text_domain' ),
    'all_items'             => __( 'All ' . $plural, 'text_domain' ),
    'add_new_item'          => __( 'Add New ' . $singular, 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New ' . $singular, 'text_domain' ),
    'edit_item'             => __( 'Edit ' . $singular, 'text_domain' ),
    'update_item'           => __( 'Update ' . $singular, 'text_domain' ),
    'view_item'             => __( 'View ' . $singular, 'text_domain' ),
    'search_items'          => __( 'Search ' .$singular, 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this ' . $singular, 'text_domain' ),
    'items_list'            => __( $plural . ' list', 'text_domain' ),
    'items_list_navigation' => __( $plural . ' list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter ' . $plural . ' list', 'text_domain' ),
  );

  $args = array(
    'label'                 => __( $name, 'text_domain' ),
    'description'           => __( '', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'thumbnail', 'page-attributes', 'editor' ),
    'taxonomies'            => array( 'location', 'job-title', 'job-type', 'category' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 4,
    'menu_icon'             => 'dashicons-welcome-widgets-menus',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'show_in_rest'          => true,
    'rewrite'               => array( 'slug' => 'job', 'with_front' => false ),
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_graphql'       => true,
    'graphql_single_name'   => 'job',
    'graphql_plural_name'   => 'jobs'
  );

  register_post_type( 'job', $args );

}
add_action( 'init', 'custom_post_type_job', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_job_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Job Title', 'taxonomy general name' ),
		'singular_name'     => _x( 'Job Title', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Job Titles' ),
		'all_items'         => __( 'All Job Titles' ),
		'parent_item'       => __( 'Parent Job Title' ),
		'parent_item_colon' => __( 'Parent Job Title:' ),
		'edit_item'         => __( 'Edit Job Title' ),
		'update_item'       => __( 'Update Job Title' ),
		'add_new_item'      => __( 'Add New Job Title' ),
		'new_item_name'     => __( 'New Job Title' ),
		'menu_name'         => __( 'Job Title' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'job-title' ),
        'show_in_graphql'   => true,
        'graphql_single_name' => 'jobTitle',
        'graphql_plural_name' => 'jobTitles',
	);

	register_taxonomy( 'job-title', array( 'job' ), $args );

	$labels = array(
		'name'              => _x( 'Location', 'taxonomy general name' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Locations' ),
		'all_items'         => __( 'All Locations' ),
		'parent_item'       => __( 'Parent Location' ),
		'parent_item_colon' => __( 'Parent Location:' ),
		'edit_item'         => __( 'Edit Location' ),
		'update_item'       => __( 'Update Location' ),
		'add_new_item'      => __( 'Add New Location' ),
		'new_item_name'     => __( 'New Location' ),
		'menu_name'         => __( 'Location' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'location' ),
        'show_in_graphql' => true,
        'graphql_single_name' => 'location',
        'graphql_plural_name' => 'locations',
	);

	register_taxonomy( 'location', array( 'job', 'team' ), $args );

	$labels = array(
		'name'              => _x( 'Job Type', 'taxonomy general name' ),
		'singular_name'     => _x( 'Job Type', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Job Type' ),
		'all_items'         => __( 'All Job Types' ),
		'parent_item'       => __( 'Parent Job Type' ),
		'parent_item_colon' => __( 'Parent Job Type:' ),
		'edit_item'         => __( 'Edit Job Type' ),
		'update_item'       => __( 'Update Job Type' ),
		'add_new_item'      => __( 'Add New Job Type' ),
		'new_item_name'     => __( 'New Genre Job Type' ),
		'menu_name'         => __( 'Job Type' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'job-type' ),
        'show_in_graphql' => true,
        'graphql_single_name' => 'jobType',
        'graphql_plural_name' => 'jobTypes',
	);

	register_taxonomy( 'job-type', array( 'job' ), $args );
}

add_action( 'init', 'create_job_taxonomies', 0 );