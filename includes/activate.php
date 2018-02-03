<?php

function r_activate_plugin() {
	if( version_compare( get_bloginfo( 'version' ), '4.2', '<' ) ) {
		wp_die(__e( 'You must update wordpress to use this plugin', 'recipe'));
	}

   #the super important thinf that done for flushing the htaccess

	recipe_init();

	flush_rewrite_rules();

   #=================================================================

   //The below code for creating table on database in wp way
	global $wpdb;

	$createSQl			=	"
	
	CREATE TABLE `".$wpdb->prefix."recipe_ratings` (
	  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  `recipe_id` bigint(20) UNSIGNED NOT NULL,
	  `rating` float UNSIGNED NOT NULL,
	  `user_ip` varchar(32) NOT NULL
	) ENGINE=InnoDB ".$wpdb->get_charset_collate().";
	";
	require( ABSPATH.'wp-admin/includes/upgrade.php' );

	dbDelta( $createSQl );

	wp_schedule_event( time(), 'daily', 'r_daily_recipe_hook' );
}