<div id="recipeStatus" style="margin-top: 20px;"></div>

<form id="recipeForm">
	<div class="form-group">
		<label for="">Title</label>
		<input type="text" class="form-control" id="r_inputTitle">
	</div>

	CONTENT_EDITOR

	<div class="form-group">
		<label for="">Ingredients</label>
		<input type="text" class="form-control" id="r_inputIngredients">
	</div>
	<div class="form-group">
		<label for="">Cooking Time</label>
		<input type="text" class="form-control" id="r_inputTime">
	</div>

	<div class="form-group">
		<label for="">Cooking Untensils</label>
		<input type="text" class="form-control" id="r_inputUtensils">
	</div>

	<div class="form-group">
		<label for="">Cooking Level</label>
		<select class="form-control" id="r_inputLevel">
			<option value="Beginner">Beginner</option>
			<option value="Intermediate">Intermediate</option>
			<option value="Expert">Expert</option>

		</select>
	</div>

	<div class="form-group">
		<label for="">Meal Type</label>
		<input type="text" class="form-control" id="r_inputMealType">
	</div>

	<div class="form-group">
		<input  type="submit" name="btn" value="submit Recipe" class="btn btn-primary">
	</div>

</form>