<?php
$servername = "gfc353.encs.concordia.ca";
$username = "gfc353_4";
$password = "Celsius1";
$dbname = "gfc353_4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>