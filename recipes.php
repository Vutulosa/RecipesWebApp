<?php
require_once ("masterpage.php");
?>

<nav class="ybreadcrumb">
	<div class="container">
		<a class="y-breadcrumb-item" href="#">Home</a> <i
			class="fas fa-angle-double-right y-right"></i> <a
			class="y-breadcrumb-item-active">Recipes</a>
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
						<div class="col-sm-4">
							<select class="form-control form-control-sm">
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
						<div class="col-sm-8 mt-2">
							<a class="searchIngredients mb-2" href="#">...or Search by
								Ingredients</a>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!--
		<div id="recipes">
    		<div class="col-lg-6">
    			<a href="#" class="recipe-link">
    				<div class="card recipe-card dessert">
    					<div class="card-body recipe-card-body">
    						<div class="card-rating">
    							<i class="fas fa-star ygold"></i> <i class="fas fa-star ygold"></i>
    							<i class="fas fa-star ygold"></i> <i class="fas fa-star ygold"></i>
    							<i class="fas fa-star yblank"></i> 
    							<span class="badge bg-warning text-dark recipe-badge">Dessert</span>
    						</div>
    						<div class="container row">
    							<i class="fas fa-utensils card-detail"></i>
    							<p class="recipe-detail">Serves 2</p>
    							<i class="fas fa-clock card-detail"></i>
    							<p class="recipe-detail">2 hours</p>
    						</div>
    						<h2 class="card-title recipe-title ygold"
    							style="line-height: 1.5;">Cupcakes</h2>
    						<p class="card-text recipe-card-text">Lorem ipsum dolor sit amet,
    							consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
    							labore et dolore magna aliqua. Ut enim ad minim veniam, quis
    							nostrud exercitation ullamco laboris.</p>
    						<span class="chef-ref">- Lyndia Wood</span>
    					</div>
    				</div>
    			</a>
    		</div>
		</div>
		  -->

		<div class="row m-1" id="results">
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
		$(document).ready(function(){
			 var ajaxrequest = $.getJSON("loadrecipes.php", function( json, status, xhr ) {
        		if ( status == "error" ) {
					var msg = "Sorry but there was an error: ";
            		$( "#error" ).html( msg + xhr.status + " " + xhr.statusText );
				}
        		else {
					for(var i = 0; i< json.length; i++) {
						var listitem = '<div class="col-lg-6">';
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
						$('#results').append(listitem);
        			}
    			}
			}); 
		});
</script>

</body>
</html>