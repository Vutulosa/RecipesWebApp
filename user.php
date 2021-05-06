
<?php
  require_once("masterpage.php");
?>

  <nav class="ybreadcrumb">
    <div class="container">
      <a class="y-breadcrumb-item" href="recipes.php">Home</a>
      <i class="fas fa-angle-double-right y-right"></i>
      <a class="y-breadcrumb-item-active">User</a>
    </div>
  </nav>

  <div class="container">
    <div class="row ybody">
        <div class="container-fluid pr-2 pl-2">
          <div class="media user pr-0 pl-0">
              <i class="fas fa-user-circle user-icon mr-2"></i>
              <div class="media-body">
                  <h2 class="user-name"><i class="fas fa-concierge-bell"></i> Sebastian Salata</h2>
                  <p class="user-id"><span class="id-title">id:</span> <span class="id">17463</span></p>
              </div>
          </div>
        </div>
        <div class="container-fluid bg-light">
          <p class="mt-3">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Add a new recipe
            </button>
          </p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <?php
require_once("addrecipe.php");
              ?>
            </div>
            <div class="form-group">
              <div class="input-group">
                <button class="btn btn-success mt-3" type="button">Publish recipe</button>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid favourites-container">
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col"><i class="fas fa-heart"></i> Favourties</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><i class="fas fa-star ygold"></i><i class="fas fa-star ygold"></i><i class="fas fa-star ygold"></i><i class="fas fa-star ygold"></i><i class="fas fa-star yblank"></i>
                        Cupcakes </th>
                        <td style="width:2.75em; padding-bottom:0;"><i class="fas fa-times" style="color:red; font-size:1.5em;"></i></td>
                    </tr>
                    <tr>
                        <th colspan="2">Search and add more...</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>
  
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="#">Yummy.com</a>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>