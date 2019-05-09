<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Success Stories.
	 */

	$labels = array(
		"name" => __( "Success Stories", "understrap" ),
		"singular_name" => __( "Successiv Story", "understrap" ),
	);

	$args = array(
		"label" => __( "Success Stories", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "success_story", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "success_stories", $args );

	/**
	 * Post Type: USPs.
	 */

	$labels = array(
		"name" => __( "USPs", "understrap" ),
		"singular_name" => __( "USP", "understrap" ),
	);

	$args = array(
		"label" => __( "USPs", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "usps", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "animal_usps", $args );

	/**
	 * Post Type: Dogs.
	 */

	$labels = array(
		"name" => __( "Dogs", "understrap" ),
		"singular_name" => __( "Dog", "understrap" ),
	);

	$args = array(
		"label" => __( "Dogs", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "dogs",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "dog", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "author" ),
	);

	register_post_type( "animal_dogs", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
