<?php

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Storlek.
	 */

	$labels = array(
		"name" => __( "Storlek", "understrap" ),
		"singular_name" => __( "Storlek", "understrap" ),
	);

	$args = array(
		"label" => __( "Storlek", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'animal_storlek', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "animal_storlek",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "animal_storlek", array( "animal_dogs" ), $args );

	/**
	 * Taxonomy: Länder.
	 */

	$labels = array(
		"name" => __( "Länder", "understrap" ),
		"singular_name" => __( "Land", "understrap" ),
	);

	$args = array(
		"label" => __( "Länder", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'animal_land', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "animal_land",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "animal_land", array( "animal_dogs" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
