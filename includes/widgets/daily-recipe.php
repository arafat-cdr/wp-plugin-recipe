<?php

class R_Daily_Rcipe_widget extends WP_Widget {

	function __construct () {
		parent::__construct( 'r_daily_recipe_widget', 'Recipe of the Day', array(
			'description'		=>	'Display a random recipe each day'
		));
	}


	function widget ($args, $instance ) {
		//outpur the content of the widget
		extract( $args );
		extract( $instance );

		$title	=	apply_filters( 'widget_title', $title );

		echo $before_widget;
		echo $before_title.$title.$after_title;

		$recipe_id 	=	get_transient( 'r_daily_recipe' );

		?>
			
		<a href="<?php echo get_permalink($recipe_id); ?>"><?php echo get_the_title( $recipe_id ); ?></a>

		<?php

		echo $after_widget;

	}

	function form( $instance ) {
	      
	            $default		=	array('title'	=>	'Recipe of the Day');
	            $instance       =	wp_parse_args( (array) $instance, $default );
	       
	       ?>


	        <p>
	        <label for="<?php echo $this->get_field_id( 'title' ); ?>"></label> 
	        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
	        </p>

	    <?php 
	    }


	function update( $new_instance, $old_instance ) {
		//process widget options to be saved

		$instance 			=	array();
		$instance['title']	=	strip_tags( $new_instance['title'] );

		return $instance;
	}


}