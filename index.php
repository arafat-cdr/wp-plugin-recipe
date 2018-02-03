<?php
/**
 * Plugin Name: Recipe
 * Description: A simple Wordpress Plugin that allows users to create recipes and rate those recipes
 * version: 1.0
 * Author: Arafat
 * Author URI: http://arafat.bd.education
 * Text Domain: recipe
 */

if ( !function_exists( 'add_action' ) ) { //prevent direct access it is asecurity issue
	echo 'Hi there! It is funny haa .... It is not allowed ....You are a fool !';
	exit;
}


//setup
define('RECIPE_PLUGIN_URL',__FILE__);


//Includes
include( 'includes/activate.php' );
include( 'includes/init.php' );
include( 'includes/deactivate.php' );
include( 'includes/admin/init.php' );
include( 'includes/admin/dashboard-widgets.php' );
include( 'process/save-post.php' );
include( 'process/filter-content.php' );
include( 'process/submit-user-recipe.php' );
include( 'includes/front/enqueue.php' );
include( 'process/rate-recipe.php' );
include( dirname(RECIPE_PLUGIN_URL).'/includes/widgets.php' );
include( dirname(RECIPE_PLUGIN_URL).'/includes/widgets/daily-recipe.php' );
include( 'includes/cron.php' );
include( 'includes/shortcode/creator.php' );	
include( 'includes/textdomain.php' );

//Hooks
register_activation_hook( __FILE__, 'r_activate_plugin' );
register_deactivation_hook( __FILE__, 'r_deactivate_plugin' ); //for off the cron job if deactivate the plugin
add_action( 'init', 'recipe_init' );
add_action( 'admin_init', 'recipe_admin_init' );
add_action( 'save_post_recipe', 'r_save_post_admin', 10, 3 );
add_filter( 'the_content', 'r_filter_recipe_content' );
add_action( 'wp_enqueue_scripts', 'r_enqueue_scripts', 999); //means it load last
add_action( 'wp_ajax_r_rate_recipe', 'r_rate_recipe' );
add_action( 'wp_ajax_nopriv_r_rate_recipe', 'r_rate_recipe' ); //guest can rate my app
add_action( 'widgets_init', 'r_widgets_init' );
add_action( 'r_daily_recipe_hook', 'r_generate_daily_recipe' );
add_action( 'wp_ajax_r_submit_user_recipe', 'r_submit_user_recipe' );
add_action( 'wp_ajax_nopriv_r_submit_user_recipe', 'r_submit_user_recipe' );
add_action( 'wp_dashboard_setup', 'arafat_add_dashboard_widgets' );
add_action( 'plugins_loaded', 'arafat_load_textdomain' );


//Shortcodes
add_shortcode( 'recipe_creator', 'r_recipe_creator_shortcode' );

