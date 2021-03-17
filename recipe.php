
<?php
  require_once("masterpage.php");
?>
  
  <nav class="ybreadcrumb">
    <div class="container">
      <a class="y-breadcrumb-item" href="#">Home</a>
      <i class="fas fa-angle-double-right y-right"></i>
      <a class="y-breadcrumb-item" href="recipes.php">Recipes</a>
      <i class="fas fa-angle-double-right y-right"></i>
      <a class="y-breadcrumb-item-active">Recipe</a>
    </div>
  </nav>

  <div class="container">
    <div class="row ybody">
        <div class="container recipe-header">
            <h2 class="recipe-header ygold">Cupcakes</h2>
            <h6 class="recipe-header">by <a href="#">Alberto Mazzari</a></h6>
        </div>
        <div class="container">
            <div class="rating">
                <i class="fas fa-star ygold"></i>
                <i class="fas fa-star ygold"></i>
                <i class="fas fa-star ygold"></i>
                <i class="fas fa-star ygold"></i>
                <i class="fas fa-star yblank"></i>
                <a class="ratings">17 Ratings</a>
            </div>
        </div>
        <div class="container" style="margin-bottom:0.75em;">
            <div class="recipe-details">
                <i class="fas fa-utensils"></i><p class="recipe-detail" id="tooltip" data-toggle="tooltip" data-placement="top" title="Servings">Serves 2</p>
                <i class="fas fa-clock"></i><p class="recipe-detail"  data-toggle="tooltip" data-placement="top" title="Cooking Time">2 hours</p>
            </div>
        </div>
        <div class="col-md-4 border-top">
            <h5 class="recipe-details-header"><i class="fas fa-receipt"></i> Ingredients</h5>
            <ul>
                <li>Ingredient 1</li>
                <li>Ingredient 1</li>
                <li>Ingredient 1</li>
                <li>Ingredient 1</li>
            </ul>
        </div>
        <div class="col-md-8 border-top">
        <h5 class="recipe-details-header"><i class="fas fa-clipboard-list"></i> Method</h5>
            <ol>
                <li>Ingredient 1</li>
                <li>Ingredient 1</li>
                <li>Ingredient 1</li>
                <li>Ingredient 1</li>
            </ol>
        </div>
        <div class="misc">
            <button type="button" class="btn btn-success btn-sm"><i class="fas fa-heart"></i> Add to favourites</button>
            <button type="button" class="btn btn-info btn-sm"><i class="fas fa-star"></i> Rate</button>
        </div>
    </div>
  </div>



  <div class="text-center p-3 footer-fixed" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="#">Yummy.com</a>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
        </script>

</body>
</html>