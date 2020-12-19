<?php
 include_once 'inc/connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" href=img/transparentlogo.png>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">
  <link rel="google drive" href="https://drive.google.com/drive/folders/1bRAuLQLbgYUtKFU5hCujrY-A5E5WfrvI?usp=sharing">
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
         <a class="nav-link" href="robots.php">Robots<span class="sr-only">(current)</span></a>
       </li>
     </ul>
   </div>
 </nav>
 </header>

<h1>Customize your Cyborg</h1>
    <br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
    <form action="summary.php" method="get">
<!-- This code is for the name dropdown menu -->
<h5>Name:</h5>
<?php
$mysqli = NEW MySQLi('localhost:3306', 'mahs_cnoble', 'mustangs', 'mahs_cnoble');

$resultSet = $mysqli->query("SELECT * FROM names");
?>

<select name="name">
<?php
while($rows = $resultSet->fetch_assoc())
{
  $name = $rows['name'];
  echo "<option value='$name'>$name</option>";
}
?>
</select>
<br>
<br>
<!-- This code is for the height dropdown menu -->

<h5>Height:</h5>
<?php
$mysqli = NEW MySQLi('localhost:3306', 'mahs_cnoble', 'mustangs', 'mahs_cnoble');

$resultSet = $mysqli->query("SELECT * FROM height");
?>

<select name="height">
<?php
while($rows = $resultSet->fetch_assoc())
{
  $height = $rows['height'];
  echo "<option value='$height'>$height</option>";
}
?>
</select>
<br>
<br><!-- This code is for the color dropdown menu -->
<h5>Color:</h5>
<?php
$mysqli = NEW MySQLi('localhost:3306', 'mahs_cnoble', 'mustangs', 'mahs_cnoble');

$resultSet = $mysqli->query("SELECT * FROM color");
?>

<select name="color">
<?php
while($rows = $resultSet->fetch_assoc())
{
  $color = $rows['color'];
  echo "<option value='$color'>$color</option>";
}
?>
</select>
<br>
<br>
<!--This is the code for the job dropdown menu -->
<h5>Job:</h5>
<?php
$mysqli = NEW MySQLi('localhost:3306', 'mahs_cnoble', 'mustangs', 'mahs_cnoble');

$resultSet = $mysqli->query("SELECT * FROM job");
?>

<select name="job">
<?php
while($rows = $resultSet->fetch_assoc())
{
  $job = $rows['job'];
  echo "<option value='$job'>$job</option>";
}
?>
</select>
<br>
<br>
<!-- This code is for the gender dropdown menu -->

<?php
$mysqli = NEW MySQLi('localhost:3306', 'mahs_cnoble', 'mustangs', 'mahs_cnoble');

$resultSet = $mysqli->query("SELECT * FROM gender");
?>
<h5>Gender:</h5>
<select name="gender">
<?php
while($rows = $resultSet->fetch_assoc())
{
  $gender = $rows['gender'];
  echo "<option value='$gender'>$gender</option>";
}
?>
</select>

<br>
<br>
<input type="submit" name="submitbutton" value="Click Here To Submit!">
</form>
		</div>
		<div class="col-md-6">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img  src="https://i.imgur.com/YXGJITM.jpg" alt="First slide" width="500px" height="500px">
    </div>
    <div class="carousel-item">
      <img src="https://i.imgur.com/xguqd9G.jpg" alt="Second slide"  width="500px" height="500px">
    </div>
    <div class="carousel-item">
      <img src="https://i.imgur.com/AnPYRYd.jpg" alt="Third slide"  width="500px" height="500px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>
	</div>
</div>

<footer class="footercont">
  <div class="container">
    <div class="row pt-4 text-center d-flex justify-content-center">
      <div class="col-md-2 mb-3">
        <h6 class="title font-bold"><a href="about.php" class="foottext">About</a></h6>
      </div>
      <div class="col-md-2 mb-3">
        <h6 class="title font-bold"><a href="#toppage" class="foottext">Back to Top</a></h6>
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

