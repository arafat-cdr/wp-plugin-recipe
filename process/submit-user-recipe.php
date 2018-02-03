<?php

function r_submit_user_recipe() {
	
	$response	=	array( 'status' => 1 );

	$ck = empty($_POST['ingredients']) || empty($_POST['time']) || empty($_POST['utensils']) || empty($_POST['level']) || empty($_POST['meal_type']) || empty($_POST['title']);

	if($ck) {

		wp_send_json($response);
	}

	$title									=	sanitize_text_field( $_POST['title'] );
	$content								=	wp_kses_post( $_POST['content'] );
	$recipe_data							=	array();
	$recipe_data['ingredients']				=	sanitize_text_field($_POST['ingredients']);
	$recipe_data['time']					=	sanitize_text_field($_POST['time']);
	$recipe_data['utensils']				=	sanitize_text_field($_POST['utensils']);
	$recipe_data['level']					=	sanitize_text_field($_POST['level']);
	$recipe_data['meal_type']				=	sanitize_text_field($_POST['meal_type']);
	$recipe_data['rating']					=	0;
	$recipe_data['rating_count']			=	0;


	$post_id 								=	wp_insert_post( array(
		'post_content'						=>	$content,
		'post_name'							=>	$name,   //the name (slug) for your post
		'post_title'						=>	$title,  //the title of your post
		'post_status'						=>  'pending', // default 'draft'
		'post_type'							=>	'recipe'   //default 'post'

	));

	update_post_meta( $post_id, 'recipe_data', $recipe_data );
	$response['status']						= 2;
	wp_send_json($response);
}