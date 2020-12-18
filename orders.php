<?php
 include_once 'inc/connection.php';
 include_once 'robots.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    




<?php
$servername = "localhost:3306";
$username = "mahs_cnoble";
$password = "mustangs";
$dbname = "mahs_cnoble";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO orders (orders.name, height, color, job, gender)
VALUES ('$name', '$height', '$color', '$job', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "Your Order has been created!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>
<br>
<br>
<br>

<form action="robots.php">
  <button type="submit" name="submitbutton" value="Back to Robots"></button>
</form>

</body>
</html>


