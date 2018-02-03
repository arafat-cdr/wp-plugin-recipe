<?php

function r_recipe_options_mb( $post ) {

	$recipe_data	=	get_post_meta( $post->ID, 'recipe_data', true );

	if(!$recipe_data)
	{
		$recipe_data = [

			'ingridients'	=>	'',
			'time'			=>	'',
			'utensils'		=>  '',
			'level'			=>	'',
			'meal_type'		=>	''

		];
	}
	
	?>
	
	<div class="form-group">
		<label>Ingredients</label>
		<input type="text" name="r_inputIngredients" class="form-control" value="<?php echo $recipe_data['ingridients']; ?>">
	</div>

	<div class="form-group">
		<label>Cooking Time</label>
		<input type="text" name="r_inputTime" class="form-control" value="<?php echo $recipe_data['time']; ?>">
	</div>

	<div class="form-group">
		<label>Cooking Utensils</label>
		<input type="text" name="r_inputUtensils" class="form-control" value="<?php echo $recipe_data['utensils']; ?>">
	</div>

	<div class="form-group">
		<label>Cooking Level</label>
		<select name="r_inputLevel" class="form-control">
			<option value="Beginner">Beginner</option>
			<option value="Intermediate" <?php echo $recipe_data['level'] == 'Intermediate' ? 'selected' : 'nooo' ; ?>>Intermediate</option>
			<option value="Expert" <?php echo $recipe_data['level'] == 'Expert' ? 'selected' : ''; ?>>Expert</option>
		</select>
	</div>

	<div class="form-group">
		<label>Meal Type</label>
		<input type="text" name="r_inputMealType" class="form-control" value="<?php echo $recipe_data['meal_type']; ?>">
	</div>

	<?php
}