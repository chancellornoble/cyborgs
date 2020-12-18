<?php


  $dbServername = "localhost:3306";
  $dbUsername = "mahs_cnoble";
  $dbpassword = "mustangs";
  $dbName = "mahs_cnoble";
  
  $conn = new mysqli($dbServername, $dbUsername, $dbpassword, $dbName);
  if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
  }
?>