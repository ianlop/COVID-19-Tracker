<?php
$servername = "localhost:3306";
$username = "root";
$password = '';
$dbname = "covid19_tracker";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
/*
//Your sql query here: v v v v
$sql = "SELECT first_name, last_name FROM Person";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "Hello this is a test" ."<br>";
  while($row = $result->fetch_assoc()) {
    echo "Tuple: " . $row["first_name"].' '. $row["last_name"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
$statement = $conn->prepare('SELECT * FROM comp353.books as books');
$statement->execute();


*/
?>