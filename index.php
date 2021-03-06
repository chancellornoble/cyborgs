<?php
 include_once 'inc/connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" href=img/transparentlogo.png>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">
  <title>Robots</title>
</head>

  <body>
    <header>
 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="index.php"><img class="logoimg" src="https://i.imgur.com/epOqn1f.jpeg" height="25px" width="25px"></a>
          <!---  <a class="navbar-brand" href="index.php">Shop</a> --->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="robots.php">Robots</a>
              </li>
            </ul>
          </div>
        </nav>

 </header>

<h1>C&H Cyborgs</h1>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="https://i.imgur.com/MM34LG6.jpg" alt="First slide" height="500px">
      <div class="carousel-caption">
            <h5>Purpose</h5>
            <small>
            Do you need help doing the dishes?
            </small>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://i.imgur.com/axxtgsI.jpeg" alt="Second slide" height="500px">
      <div class="carousel-caption">
            <h5>Why do you need a Cyborg?</h5>
            <small>
            Are you tired of coming home to a dirty house?
            </small>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://i.imgur.com/5B7ryRD.jpeg" alt="Third slide" height="500px">
      <div class="carousel-caption">
            <h5>Robots</h5>
            <small>
            Click on  Robots in the navigation bar to customize your own cyborg!
            </small>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<footer class="footercont">
  <div class="container">
    <div class="row pt-4 text-center d-flex justify-content-center">
      <div class="col-md-2 mb-3">
        <h6 class="title font-bold"><a href="about.php" class="foottext">About</a></h6>
      </div>
    
      <div class="col-md-2 mb-3">
        <h6 class="title font-bold"><a href="robots.php" class="foottext">Robots</a></h6>
      </div>
    </div>
    <hr class="rgba-white-light">
    <hr class="clearfix d-md-none rgba-white-light">
    <div class="row pb-3">
      <div class="col-md-12">
        
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container-fluid copyfoot">
      © 2020
    </div>
  </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
  </body>
</html>
