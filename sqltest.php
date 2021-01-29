<?php

session_start();

$servername = "cs3620.mysql.database.azure.com";
$username = (isset($_SESSION['SQLUSR']) ? $_SESSION['SQLUSR'] : $_ENV['SLQUSER']);
$password = (isset($_SESSION['SQLPW']) ? $_SESSION['SQLPW'] : $_ENV['SLQPW']);
$dbname = "cs3620_proj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO shows (showid, showtitle)
VALUES (5, 'The Office')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
