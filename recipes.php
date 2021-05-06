<?php
require_once ("masterpage.php");
?>

<nav class="ybreadcrumb">
	<div class="container">
		<a class="y-breadcrumb-item-active">Recipes</a>
	</div>
</nav>
<div class="container">
	<div class="row ybody">


		<div class="search-bar col-12">
			<form>
				<div class="form-group search-recipe">
					<input type="name" class="form-control search-recipe"
						id="recipeName" aria-describedby="recipeSearchFor"
						placeholder="Search for your recipe...">
					<div class="row">
						<div class="col-8">
							<select class="form-control form-control-sm pl-3 pr-3" id="category">
								<option>All Categories</option>
								<option>Main Dish</option>
								<option>Side Dish</option>
								<option>Light Meal</option>
								<option>Starter</option>
								<option>Baking</option>
								<option>Dessert</option>
								<option>Soup</option>
								<option>Snack</option>
								<option>Other</option>
							</select>
						</div>
						<div class="col-4">
							<button id="search" type="button" class="search btn btn-sm btn-primary pl-3 pr-3" style="width:100%">Search!</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="row m-1" id="results" style="width:100%" >
			
		</div>

	</div>

</div>
<div class="text-center p-3"
	style="background-color: rgba(0, 0, 0, 0.2);">
	© 2020 Copyright: <a class="text-dark" href="#">Yummy.com</a>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	crossorigin="anonymous"></script>

<script type="text/javascript">
		function createRecipes ( json ) {
			var listitem = "";
			for(var i = 0; i< json.length; i++) {
				listitem += '<div class="col-lg-6">';
				listitem += '<a href="recipe.php?id=' + json[i].recipeID + '" class="recipe-link">';
				listitem += '<div class="card recipe-card ' + json[i].category + '">';
				listitem += '<div class="card-body recipe-card-body"> <div class="card-rating">';

				if (json[i].rating == null || json[i].rating == 0) {
					listitem += '<span class="badge bg-secondary">No ratings</span> ';
					for ( var j = 0; j < 5; j++) {
						listitem += '<i class="fas fa-star yblank"></i>';
					}
				} else {
					for ( var j = 0; j < json[i].rating; j++) {
						listitem += '<i class="fas fa-star ygold"></i>';
					}
					for ( var j = 5; j > json[i].rating; j--) {
						listitem += '<i class="fas fa-star yblank"></i>';
					}
				}
				
				listitem += '<span class="badge bg-warning text-dark recipe-badge">';
				
				switch(json[i].category) {
					case "maindish":
						listitem += "Main Dish";
					    break;
					case "sidedish":
						listitem += "Side Dish";
					    break;
					case "lightmeal":
						listitem += "Light Meal";
					    break;
					case "starter":
						listitem += "Starter";
					    break;
					case "baking":
						listitem += "Baking";
					    break;
					case "dessert":
						listitem += "Dessert";
					    break;
					case "snack":
						listitem += "Snack";
					    break;
					case "soup":
						listitem += "Soup";
					    break;
					case "other":
						listitem += "Other";
					    break;
					default:
						listitem += json[i].category;
				}
				
				listitem += '</span></div>';
				listitem += `<div class="container row">
							<i class="fas fa-utensils card-detail"></i>
							<p class="recipe-detail">Serves ` + json[i].servings + `</p>
							<i class="fas fa-clock card-detail"></i>
							<p class="recipe-detail">` + json[i].cookingTime + `</p>`;

				
				listitem += '</div><h2 class="card-title recipe-title ygold" style="line-height: 1.5;">' + json[i].recipeName + '</h2>';
				listitem += '<p class="card-text recipe-card-text">' + json[i].description + '</p>';
				listitem += '<span class="chef-ref">- ' + json[i].firstname + ' ' + json[i].lastname + '</span>';
				listitem += '</div></div></a></div>';
			}
			if ( listitem == "" ) {
				$('#results').html(`<div class="col-12"><div class="alert alert-danger alert-dismissible fade show" role="alert">
						  <strong>No results!</strong> Perhaps try a different query
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div></div>`);
			} else {
				$('#results').html(listitem);
			}
			
		}
		
		$(document).ready(function(){
			loadRecipes()
		});

		$("#search").click(function(){
			loadRecipes()
		});

		function loadRecipes() {
			var recipeName = $("#recipeName").val();
			var category = $("#category").val();
			var ajaxrequest = $.getJSON("loadrecipes.php", {icategory:category, irecipeName:recipeName}, function( json, status, xhr ) {
        		if ( status == "error" ) {
					var msg = "Sorry but there was an error: ";
            		$( "#error" ).html( msg + xhr.status + " " + xhr.statusText );
				}
        		else {
					createRecipes(json)
    			}
			}); 
		}
		
</script>

</body>
</html>