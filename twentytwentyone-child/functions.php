<?php
/*This file is part of Twentytwentyone_child-child, Twentytwentyone_child child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/
function Twentytwentyone_child_theme_support() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	
	}
	
	add_action('after_setup_theme', 'Twentytwentyone_child_theme_support');
	
	function Twentytwentyone_child_menus(){
		$locations = array(
			'primary'=> "Primary Desktop",
			'footer' => "Footer Menu Items"
		);
	
		register_nav_menus($locations);
	
		
	}
	add_action('init', 'Twentytwentyone_child_menus');
	
	function Twentytwentyone_child_register_styles() {
		$version = wp_get_theme()->get( 'Version' );
		wp_enqueue_style('twentytwentone-child-style', get_template_directory_uri() . "/style.css", array('Twentytwentyone_child-bootstrap'), $version, 'all');
		wp_enqueue_style('twentytwentone-child-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
		wp_enqueue_style('twentytwentone-child-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
	}
	
	add_action( 'wp_enqueue_scripts', 'Twentytwentyone_child_register_styles');
	
	function Twentytwentyone_child_register_scripts() {
		wp_enqueue_script('twentytwentone-child-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(),'3.4.1', true);
		wp_enqueue_script('twentytwentone-child-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(),'1.16.0', true);
		wp_enqueue_script('twentytwentone-child-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(),'4.4.1', true);
		wp_enqueue_script('twentytwentone-child-js',  get_template_directory_uri() ."/assets/js/main.js", array(),'1.0', true);
	}
	
	add_action( 'wp_enqueue_scripts', 'Twentytwentyone_child_register_scripts');
	
if ( ! function_exists( 'sufficeTwentytwentyone_child_enqueueTwentytwentyone_child_styles' ) ) {
	function Twentytwentyone_child_enqueueTwentytwentyone_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'Twentytwentyone_child_enqueueTwentytwentyone_child_styles' );

/*Write here your own functions */
function cptui_register_my_cpts() {

	/**
	 * Post Type: properties.
	 */

	$labels = [
		"name" => __( "properties", "twentytwentyone-child" ),
		"singular_name" => __( "property", "twentytwentyone-child" ),
	];

	$args = [
		"label" => __( "properties", "twentytwentyone-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "property", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "property", $args );

	/**
	 * Post Type: Listings.
	 */

	$labels = [
		"name" => __( "Listings", "twentytwentyone-child" ),
		"singular_name" => __( "Listing", "twentytwentyone-child" ),
		"menu_name" => __( "Listings", "twentytwentyone-child" ),
		"all_items" => __( "Listings", "twentytwentyone-child" ),
		"add_new" => __( "Add New", "twentytwentyone-child" ),
		"add_new_item" => __( "Add New Listing", "twentytwentyone-child" ),
		"edit_item" => __( "Edit Listing", "twentytwentyone-child" ),
		"new_item" => __( "New Listing", "twentytwentyone-child" ),
		"view_item" => __( "View Listing", "twentytwentyone-child" ),
		"view_items" => __( "View Listings", "twentytwentyone-child" ),
		"search_items" => __( "Search Listings", "twentytwentyone-child" ),
		"not_found" => __( "No Listings Found", "twentytwentyone-child" ),
		"not_found_in_trash" => __( "Not Found in Trash", "twentytwentyone-child" ),
		"parent" => __( "Parent Listing", "twentytwentyone-child" ),
		"featured_image" => __( "Featured Image for Listing", "twentytwentyone-child" ),
		"set_featured_image" => __( "Set Featured Image for Listing", "twentytwentyone-child" ),
		"remove_featured_image" => __( "Remove Featured Image for this Listing", "twentytwentyone-child" ),
		"use_featured_image" => __( "Use Featured Image for this Listing", "twentytwentyone-child" ),
		"archives" => __( "Archived Listings", "twentytwentyone-child" ),
		"insert_into_item" => __( "Insert Into Listing", "twentytwentyone-child" ),
		"uploaded_to_this_item" => __( "Uploaded to this Listing", "twentytwentyone-child" ),
		"filter_items_list" => __( "Filter Listings List", "twentytwentyone-child" ),
		"items_list_navigation" => __( "Listings List Navigation", "twentytwentyone-child" ),
		"items_list" => __( "Listings List", "twentytwentyone-child" ),
		"attributes" => __( "Listings Attributes", "twentytwentyone-child" ),
		"name_admin_bar" => __( "Listing", "twentytwentyone-child" ),
		"item_published" => __( "Listing Published", "twentytwentyone-child" ),
		"item_published_privately" => __( "Listing Published Privately", "twentytwentyone-child" ),
		"item_reverted_to_draft" => __( "Listing reverted to draft", "twentytwentyone-child" ),
		"item_scheduled" => __( "Listing Scheduled", "twentytwentyone-child" ),
		"item_updated" => __( "Listing Updated", "twentytwentyone-child" ),
		"parent_item_colon" => __( "Parent Listing", "twentytwentyone-child" ),
	];

	$args = [
		"label" => __( "Listings", "twentytwentyone-child" ),
		"labels" => $labels,
		"description" => "For creating new property listings",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "listing", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields", "revisions" ],
		"taxonomies" => [ "property_categories" ],
	];

	register_post_type( "listing", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_cpts_property() {

	/**
	 * Post Type: properties.
	 */

	$labels = [
		"name" => __( "properties", "twentytwentyone-child" ),
		"singular_name" => __( "property", "twentytwentyone-child" ),
	];

	$args = [
		"label" => __( "properties", "twentytwentyone-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "property", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "property", $args );
}

add_action( 'init', 'cptui_register_my_cpts_property' );
function cptui_register_my_cpts_listing() {

	/**
	 * Post Type: Listings.
	 */

	$labels = [
		"name" => __( "Listings", "twentytwentyone-child" ),
		"singular_name" => __( "Listing", "twentytwentyone-child" ),
		"menu_name" => __( "Listings", "twentytwentyone-child" ),
		"all_items" => __( "Listings", "twentytwentyone-child" ),
		"add_new" => __( "Add New", "twentytwentyone-child" ),
		"add_new_item" => __( "Add New Listing", "twentytwentyone-child" ),
		"edit_item" => __( "Edit Listing", "twentytwentyone-child" ),
		"new_item" => __( "New Listing", "twentytwentyone-child" ),
		"view_item" => __( "View Listing", "twentytwentyone-child" ),
		"view_items" => __( "View Listings", "twentytwentyone-child" ),
		"search_items" => __( "Search Listings", "twentytwentyone-child" ),
		"not_found" => __( "No Listings Found", "twentytwentyone-child" ),
		"not_found_in_trash" => __( "Not Found in Trash", "twentytwentyone-child" ),
		"parent" => __( "Parent Listing", "twentytwentyone-child" ),
		"featured_image" => __( "Featured Image for Listing", "twentytwentyone-child" ),
		"set_featured_image" => __( "Set Featured Image for Listing", "twentytwentyone-child" ),
		"remove_featured_image" => __( "Remove Featured Image for this Listing", "twentytwentyone-child" ),
		"use_featured_image" => __( "Use Featured Image for this Listing", "twentytwentyone-child" ),
		"archives" => __( "Archived Listings", "twentytwentyone-child" ),
		"insert_into_item" => __( "Insert Into Listing", "twentytwentyone-child" ),
		"uploaded_to_this_item" => __( "Uploaded to this Listing", "twentytwentyone-child" ),
		"filter_items_list" => __( "Filter Listings List", "twentytwentyone-child" ),
		"items_list_navigation" => __( "Listings List Navigation", "twentytwentyone-child" ),
		"items_list" => __( "Listings List", "twentytwentyone-child" ),
		"attributes" => __( "Listings Attributes", "twentytwentyone-child" ),
		"name_admin_bar" => __( "Listing", "twentytwentyone-child" ),
		"item_published" => __( "Listing Published", "twentytwentyone-child" ),
		"item_published_privately" => __( "Listing Published Privately", "twentytwentyone-child" ),
		"item_reverted_to_draft" => __( "Listing reverted to draft", "twentytwentyone-child" ),
		"item_scheduled" => __( "Listing Scheduled", "twentytwentyone-child" ),
		"item_updated" => __( "Listing Updated", "twentytwentyone-child" ),
		"parent_item_colon" => __( "Parent Listing", "twentytwentyone-child" ),
	];

	$args = [
		"label" => __( "Listings", "twentytwentyone-child" ),
		"labels" => $labels,
		"description" => "For creating new property listings",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "listing", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields", "revisions" ],
		"taxonomies" => [ "property_categories" ],
	];

	register_post_type( "listing", $args );
}

add_action( 'init', 'cptui_register_my_cpts_listing' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: properties_categories.
	 */

	$labels = [
		"name" => __( "properties_categories", "twentytwentyone-child" ),
		"singular_name" => __( "property_categories", "twentytwentyone-child" ),
	];

	$args = [
		"label" => __( "properties_categories", "twentytwentyone-child" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'property_categories', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "property_categories",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "property_categories", [ "property" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

function cptui_register_my_taxes_property_categories() {

	/**
	 * Taxonomy: properties_categories.
	 */

	$labels = [
		"name" => __( "properties_categories", "twentytwentyone-child" ),
		"singular_name" => __( "property_categories", "twentytwentyone-child" ),
	];

	$args = [
		"label" => __( "properties_categories", "twentytwentyone-child" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'property_categories', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "property_categories",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "property_categories", [ "property" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_property_categories' );

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'listing',
        array(
            'labels' => array(
                'name' => __( 'Listing' ),
                'singular_name' => __( 'Listing' )
            ),
        'public' => true,
        'has_archive' => true,
        )
    );
}