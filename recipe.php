
<?php
require_once ("masterpage.php");
?>

<nav class="ybreadcrumb">
	<div class="container">
		<a class="y-breadcrumb-item" href="recipes.php">Recipes</a>
		<i class="fas fa-angle-double-right y-right"></i>
		<a class="y-breadcrumb-item-active" id="recipeLink"></a>
	</div>
</nav>

<div class="container">
	<div class="row ybody" id="recipe">
<!-- 		<div class="container recipe-header"> -->
<!-- 			<h2 class="recipe-header ygold">Cupcakes</h2> -->
<!-- 			<h6 class="recipe-header"> -->
<!-- 				by <a href="#">Alberto Mazzari</a> -->
<!-- 			</h6> -->
<!-- 		</div> -->
<!-- 		<div class="container"> -->
<!-- 			<div class="rating"> -->
<!-- 				<i class="fas fa-star ygold"></i> <i class="fas fa-star ygold"></i> -->
<!-- 				<i class="fas fa-star ygold"></i> <i class="fas fa-star ygold"></i> -->
<!-- 				<i class="fas fa-star yblank"></i> <a class="ratings">17 Ratings</a> -->
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	<div class="container" style="margin-bottom: 0.75em;">
<!-- 			<div class="recipe-details"> -->
<!-- 				<i class="fas fa-utensils"></i> -->
<!-- 				<p class="recipe-detail" id="tooltip" data-toggle="tooltip" -->
<!-- 					data-placement="top" title="Servings">Serves 2</p> -->
<!-- 				<i class="fas fa-clock"></i> -->
<!-- 				<p class="recipe-detail" data-toggle="tooltip" data-placement="top" -->
<!-- 					title="Cooking Time">2 hours</p> -->
<!-- 			</div> -->
<!-- 		</div> -->
		<div class="col-md-4 border-top">
			<h5 class="recipe-details-header">
				<i class="fas fa-receipt"></i> Ingredients
			</h5>
			<ul id="ingredients">
				
			</ul>
		</div>
<!-- 		<div class="col-md-9 border-top"> -->
<!-- 			<h5 class="recipe-details-header"> -->
<!-- 				<i class="fas fa-clipboard-list"></i> Method -->
<!-- 			</h5> -->
<!-- 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do -->
<!-- 				eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim -->
<!-- 				ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut -->
<!-- 				aliquip ex ea commodo consequat.</p> -->
<!-- 		</div> -->
<!-- 		<div class="misc"> -->
<!-- 			<button type="button" class="btn btn-success btn-sm"> -->
<!-- 				<i class="fas fa-heart"></i> Add to favourites -->
<!-- 			</button> -->
<!-- 			<button type="button" class="btn btn-info btn-sm"> -->
<!-- 				<i class="fas fa-star"></i> Rate -->
<!-- 			</button> -->
<!-- 		</div> -->
	</div>
</div>

<br>
<br>
<br>
<div class="text-center p-3 fixed-bottom"
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

<script  type="text/javascript">
        
		$(document).ready(function(){

			 var ajaxrequest = $.getJSON("loadrecipe.php?id=" + <?php echo $_GET["id"]?> ,function( json, status, xhr ) {
        		if ( status == "error" ) {
					var msg = "Sorry but there was an error: ";
            		$('#recipe').append(msg + xhr.status + " " + xhr.statusText);
				} 
        		else {
					$('#recipeLink').html(json.recipeName);
            		
					var recipe = '<div class="container recipe-header">';
					recipe += '<h2 class="recipe-header ygold">' + json.recipeName + '</h2>';
					recipe += '<h6 class="recipe-header"> by <a href="user.php?id=' + json.userID + '">' + json.firstname + " " + json.lastname + "</a></h6></div>";
					recipe += '<div class="container"><div class="rating">';
					if (json.rating == null || json.rating == 0) {
						for ( var j = 0; j < 5; j++) {
							recipe += '<i class="fas fa-star yblank"></i>';
						}
						recipe += ' <span class="badge bg-secondary text-white">No ratings</span> ';
					} else {
						for ( var j = 0; j < json.rating; j++) {
							recipe += '<i class="fas fa-star ygold"></i>';
						}
						for ( var j = 5; j > json.rating; j--) {
							recipe += '<i class="fas fa-star yblank"></i>';
						}
					}
					recipe += '</div></div>';
					recipe += '<div class="container" style="margin-bottom: 0.75em;"><div class="recipe-details"><i class="fas fa-utensils"></i><p class="recipe-detail" id="tooltip" data-toggle="tooltip" data-placement="top" title="Servings"> Serves ';
					recipe += json.servings;
					recipe += ' </p><i class="fas fa-clock"></i><p class="recipe-detail" data-toggle="tooltip" data-placement="top" title="Cooking Time"> ';
					recipe += json.cookingTime;
					recipe += '</p></div></div>';
						
					$('#recipe').prepend(recipe);

					var recipeBack = '<div class="col-md-8 border-top"><h5 class="recipe-details-header"><i class="fas fa-clipboard-list"></i> Method</h5><p>';
					recipeBack += json.instructions;
					recipeBack += '</p></div><div class="misc">';
					recipeBack += '<button type="button" class="btn btn-success btn-sm">';
					recipeBack += '<i class="fas fa-heart"></i> Add to favourites </button> ';
					recipeBack += '<button type="button" class="btn btn-info btn-sm">';
					recipeBack += '<i class="fas fa-star"></i> Rate </button></div>';

					$('#recipe').append(recipeBack);
    			}
			}); 

			 var ajaxrequest = $.getJSON("loadingredients.php?id=" + <?php echo $_GET["id"]?> ,function( json, status, xhr ) {
	        		if ( status == "error" ) {
						var msg = "Sorry but there was an error: ";
	            		$('#recipe').append(msg + xhr.status + " " + xhr.statusText);
					} 
	        		else {
	        			var ingredients = "";
	        			for(var i = 0; i < json.length; i++) {
	        				ingredients += "<li>" + json[i].quantity + " " + json[i].ingredientName + "</li>";
	        			}
	        			$('#ingredients').append(ingredients);
	    			}
				}); 
		});
        	
</script>

<script>
$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
</script>

</body>
</html>