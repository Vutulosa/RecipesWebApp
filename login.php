
<?php
  require_once("masterpage.php");
?>


<div class="container">
    <div class="row ybody">
      <div class="d-flex align-items-center justify-content-center" style="min-height:85vh; width:100%;">
        <div class="card login-card" style="width: 18rem; background">
          <div class="card-body">
            <form class="form-signin text-center">
              <h1 style="font-size:3.5em;"><i class="fas fa-user-circle"></i></h1>
              <div class="form-group">
                <label for="staticEmail" style="font-weight:600;">Username</label>
                <input type="text" class="form-control" id="staticEmail" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="inputPassword" style="font-weight:600;">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">Sign In <i class="fas fa-sign-in-alt"></i></button>
              <div class="mt-3">
                <a>Don't have an account?</a> <a href="#">Register</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

  <div class="text-center p-3 fixed-bottom" style="background-color: rgba(190,190,190);">
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