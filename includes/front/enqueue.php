<?php

function r_enqueue_scripts() {

	wp_register_style('r_rateit_css', plugins_url('assets/rate_it_plugin/scripts/rateit.css', RECIPE_PLUGIN_URL));

	wp_enqueue_style('r_rateit_css');

	wp_register_script('r_rateit', plugins_url('assets/rate_it_plugin/scripts/jquery.rateit.min.js', RECIPE_PLUGIN_URL), array(), '1.0.0', false );
	wp_register_script('r_rateit_main', plugins_url('assets/rate_it_plugin/scripts/main.js', RECIPE_PLUGIN_URL), array(), '1.0.0', false );

	wp_localize_script( "r_rateit_main", "recipe_obj", array(

		"ajax_url"				=> admin_url("admin-ajax.php"),

	));

	wp_enqueue_script('r_rateit');
	wp_enqueue_script('r_rateit_main');
}