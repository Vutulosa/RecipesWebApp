<?php
  require_once("masterpage.php");
?>

<nav class="ybreadcrumb">
    <div class="container">
      <a class="y-breadcrumb-item" href="#">Home</a>
      <i class="fas fa-angle-double-right y-right"></i>
      <a class="y-breadcrumb-item-active">Recipes</a>
    </div>
  </nav>
  <div class="container">
    <div class="row ybody">
      

      <div class="search-bar col-sm-12">
        <form>
          <div class="form-group search-recipe">
            <input type="name" class="form-control search-recipe" id="recipeName" aria-describedby="recipeSearchFor" placeholder="Search for your recipe...">
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
                  <option>Snack</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="col-sm-8">
                <a class="searchIngredients" href="#">...or Search by Ingredients</a>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-6">
        <a href="#" class="recipe-link">
          <div class="card recipe-card dessert">
            <div class="card-body recipe-card-body">
                  <div class="rating">
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star yblank"></i>
                    <span class="badge bg-warning text-dark recipe-badge">Dessert</span>
                  </div>
                  <div class="container row">
                    <i class="fas fa-utensils card-detail"></i><p class="recipe-detail">Serves 2</p>
                    <i class="fas fa-clock card-detail"></i><p class="recipe-detail">2 hours</p>
                  </div>
                  <h2 class="card-title recipe-title ygold" style="line-height: 1.5;">Cupcakes</h2>
                  <p class="card-text recipe-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                  <span class="chef-ref">- Lyndia Wood</span>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-6">
        <a href="#" class="recipe-link">
          <div class="card recipe-card lightmeal">
            <div class="card-body recipe-card-body">
                  <div class="rating">
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star yblank"></i>
                    <span class="badge bg-warning text-dark recipe-badge">Light Meal</span>
                  </div>
                  <div class="container row">
                    <i class="fas fa-utensils card-detail"></i><p class="recipe-detail">Serves 2</p>
                    <i class="fas fa-clock card-detail"></i><p class="recipe-detail">2 hours</p>
                  </div>
                  <h2 class="card-title recipe-title ygold" style="line-height: 1.5;">Sandwiches</h2>
                  <p class="card-text  recipe-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                  <span class="chef-ref">- Lyndia Wood</span>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-6">
        <a href="#" class="recipe-link">
          <div class="card recipe-card maindish">
            <div class="card-body recipe-card-body">
            <div class="rating">
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star yblank"></i>
                    <span class="badge bg-warning text-dark recipe-badge">Main Dish</span>
                  </div>
                  <div class="container row">
                    <i class="fas fa-utensils card-detail"></i><p class="recipe-detail">Serves 2</p>
                    <i class="fas fa-clock card-detail"></i><p class="recipe-detail">2 hours</p>
                  </div>
                  <h2 class="card-title recipe-title ygold" style="line-height: 1.5;">Pasta</h2>
                  <p class="card-text  recipe-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                  <span class="chef-ref">- Lyndia Wood</span>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-6">
        <a href="#" class="recipe-link">
          <div class="card recipe-card other">
            <div class="card-body recipe-card-body">
            <div class="rating">
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star ygold"></i>
                    <i class="fas fa-star yblank"></i>
                    <span class="badge bg-warning text-dark recipe-badge">Other</span>
                  </div>
                  <div class="container row">
                    <i class="fas fa-utensils card-detail"></i><p class="recipe-detail">Serves 2</p>
                    <i class="fas fa-clock card-detail"></i><p class="recipe-detail">2 hours</p>
                  </div>
                  <h2 class="card-title recipe-title ygold" style="line-height: 1.5;">Gulash</h2>
                  <p class="card-text recipe-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                  <span class="chef-ref">- Lyndia Wood</span>
            </div>
          </div>
        </a>
      </div>
    </div>

  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">Yummy.com</a>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>