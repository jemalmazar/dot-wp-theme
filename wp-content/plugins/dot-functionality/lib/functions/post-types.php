<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Event Custom Post Type
function events_post_type() {

	$labels = array(
		'name'                  => 'Events',
		'singular_name'         => 'Event',
		'menu_name'             => 'Events',
		'name_admin_bar'        => 'Event',
		'archives'              => 'Event Archives',
		'attributes'            => 'Event Attributes',
		'parent_item_colon'     => 'Parent Event:',
		'all_items'             => 'All Events',
		'add_new_item'          => 'Add New Event',
		'add_new'               => 'Add New',
		'new_item'              => 'New Event',
		'edit_item'             => 'Edit Event',
		'update_item'           => 'Update Event',
		'view_item'             => 'View Event',
		'view_items'            => 'View Events',
		'search_items'          => 'Search Event',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Event',
		'uploaded_to_this_item' => 'Uploaded to this Event',
		'items_list'            => 'Events list',
		'items_list_navigation' => 'Events list navigation',
		'filter_items_list'     => 'Filter Events list',
	);
	$args = array(
		'label'                 => 'Event',
		'description'           => 'Event Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'events_post_type', 0 );

// Register Featured Sponsor Post Type
function featured_sponsor_post_type() {

	$labels = array(
		'name'                  => _x( 'Featured Sponsors', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Featured Sponsor', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Featured Sponsors', 'text_domain' ),
		'name_admin_bar'        => __( 'Featured Sponsor', 'text_domain' ),
		'archives'              => __( 'Featured Sponsor Archives', 'text_domain' ),
		'attributes'            => __( 'Featured Sponsor Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Featured Sponsor:', 'text_domain' ),
		'all_items'             => __( 'All Featured Sponsors', 'text_domain' ),
		'add_new_item'          => __( 'Add New Featured Sponsor', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Featured Sponsor', 'text_domain' ),
		'edit_item'             => __( 'Edit Featured Sponsor', 'text_domain' ),
		'update_item'           => __( 'Update Featured Sponsor', 'text_domain' ),
		'view_item'             => __( 'View Featured Sponsor', 'text_domain' ),
		'view_items'            => __( 'View Featured Sponsors', 'text_domain' ),
		'search_items'          => __( 'Search Featured Sponsor', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Featured Sponsor', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Featured Sponsor', 'text_domain' ),
		'items_list'            => __( 'Featured Sponsors list', 'text_domain' ),
		'items_list_navigation' => __( 'Featured Sponsors list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Featured Sponsors list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Featured Sponsor', 'text_domain' ),
		'description'           => __( 'Featured Sponsor Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'featured_sponsor', $args );

}
add_action( 'init', 'featured_sponsor_post_type', 0 );