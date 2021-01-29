<?php

session_start();

$servername = "cs3620.mysql.database.azure.com";
$username = (isset($_SESSION['SQLUSER']) ? $_SESSION['SQLUSER'] : $_ENV['SQLUSER']);
$password = (isset($_SESSION['SQLPW']) ? $_SESSION['SQLPW'] : $_ENV['SQLPW']);
$dbname = "cs3620_proj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO shows (showid, showtitle)
VALUES (6, 'The Office')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
