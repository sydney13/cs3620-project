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

$sql = "INSERT INTO books (bookid, booktitle)
VALUES (1, 'Night')";

$sql = "INSERT INTO books (bookid, booktitle)
VALUES (2, 'Harry Potter')";

$sql = "INSERT INTO books (bookid, booktitle)
VALUES (3, 'Girl, Stop Apologizing')";

$sql = "SELECT id, bookid, booktitle FROM books";
$result = $conn->query($sql);

$sql = "DELETE FROM books WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($conn->query($sql) === TRUE) {
    echo  "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["bookid"]. " " . $row["booktitle"]. "<br>";
    }
  } else {
    echo "0 results";
  }

$conn->close();


?>