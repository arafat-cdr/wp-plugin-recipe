<?php

function arafat_add_dashboard_widgets() {
	wp_add_dashboard_widget( 
 		'arafat_latest_recipe_rating_widget',
 		'Latest Recipe Ratings',
 		'arafat_latest_recipe_rating_display'

	 );	
}

function arafat_latest_recipe_rating_display () {

	global $wpdb;

	$latest_ratings 	= $wpdb->get_results("SELECT * FROM  ".$wpdb->prefix."recipe_ratings ORDER BY id DESC LIMIT 5");

	echo "<ul>";

	foreach ($latest_ratings as  $rating) {
		$title			=	get_the_title( $rating->recipe_id );
		$permalink		=	get_the_permalink($rating->recipe_id);

		?>
		<li>
			<a href="<?php echo $permalink;?>"><?php echo $title; ?>
			received a rating of <?php echo $rating->rating; ?> </a>

		</li>

		<?php
	}

	echo "</ul>";
}