<?php
class UserDAO {
  function getUser($user){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT first_name, last_name, username, user_id FROM user WHERE user_id =" . $user->getUserId();
    // $sql = "SELECT first_name, last_name, username, user_id FROM user WHERE username ='" . $user->getUserId() . "'";
    // $sql = "SELECT first_name, last_name, username, user_id FROM user WHERE last_name ='" . $user->getUserId() . "'";
    // $sql = "SELECT first_name, last_name, username, user_id FROM user WHERE first_name ='" . $user->getUserId() . "'";
<<<<<<< HEAD
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
  }

  function getTheUserName($user){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT first_name, last_name, username, username FROM user WHERE username =\"" . $user->getUsername() . "\"";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
  }


  function getTheFirstName($user){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT first_name, last_name, username, first_name FROM user WHERE first_name =\"" . $user->getFirstName() . "\"";
=======
>>>>>>> 9714bd8fa492c42390aa3514eb1d788e1e06666e
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
  }

<<<<<<< HEAD

  function getTheLastName($user){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT first_name, last_name, username, last_name FROM user WHERE last_name = \"" . $user->getLastName() . "\"";
    $result = $conn->query($sql);

=======
  function getTheUserName($user){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT first_name, last_name, username, username FROM user WHERE username =\"" . $user->getUsername() . "\"";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
  }


  function getTheFirstName($user){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT first_name, last_name, username, first_name FROM user WHERE first_name =\"" . $user->getFirstName() . "\"";
    $result = $conn->query($sql);

>>>>>>> 9714bd8fa492c42390aa3514eb1d788e1e06666e
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
  }

<<<<<<< HEAD
  function checkLogin($passedinusername, $passedinpassword){
    require_once('./utilities/connection.php');
    $user_id = 0;
    $sql = "SELECT user_id FROM user WHERE username = '" . $passedinusername . "' AND password = '" . hash("sha256", trim($passedinpassword)) . "'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $user_id = $row["user_id"];
      }
    }
    else {
        echo "0 results";
    }
    $conn->close();
    return $user_id;
=======

  function getTheLastName($user){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT first_name, last_name, username, last_name FROM user WHERE last_name = \"" . $user->getLastName() . "\"";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
>>>>>>> 9714bd8fa492c42390aa3514eb1d788e1e06666e
  }


  function createUser($user){

    require_once('./utilities/connection.php');
    
    $sql = "INSERT INTO cs3620_proj.user
    (
    `username`,
    `password`,
    `first_name`,
    `last_name`)
    VALUES
    ('" . $user->getUsername() . "',
    '" . $user->getPassword() . "',
    '" . $user->getFirstName() . "',
    '" . $user->getLastName() . "'
    );";
    $result = $conn->query($sql);

    $conn->close();

    echo "user created";
  }

  function deleteUser($un){
    require_once('./utilities/connection.php');
    
    $sql = "DELETE FROM cs3620_proj.user WHERE username = '" . $un . "';";

    $result = $conn->query($sql);

    $conn->close();

    echo "user deleted";
  }
}
?>
