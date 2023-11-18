<?php
$servername = "localhost";
$username = "root";
$password = "";
$namedb="order";
// Create connection
$mysqli = new mysqli($servername, $username, $password, $namedb);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
// echo "Connected successfully";
?>