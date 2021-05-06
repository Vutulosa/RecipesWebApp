<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/all.css" rel="stylesheet"> <!--load all styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/my.css">

    <title>Yummy</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#111417;">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" width="90" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item y-nav-item">
          <a class="nav-link y-nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item y-nav-item active">
          <a class="nav-link y-nav-link" href="recipes.php">Recipes</a>
        </li>
      </ul>
      <?php
        session_start();
        if(isset($_SESSION['username'] )){
            echo '<a class="nav-link y-nav-link" href="user.php?username=' . $_SESSION['username'] . '" style="color:white;">' . $_SESSION['username'] . ' <i class="fas fa-sign-in-alt"></i></a>';
        } else {
            echo '<a class="nav-link y-nav-link" href="login.php" style="color:white;"> Sign In <i class="fas fa-sign-in-alt"></i></a>';
        }
      ?>
    </div>
  </div>
  </nav>