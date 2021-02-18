<?php
class UserDAO {
  function getUser($user){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT first_name, last_name, username, user_id FROM user WHERE user_id =" . $user->getUserId();
    // $sql = "SELECT first_name, last_name, username, user_id FROM user WHERE username ='" . $user->getUserId() . "'";
    // $sql = "SELECT first_name, last_name, username, user_id FROM user WHERE last_name ='" . $user->getUserId() . "'";
    // $sql = "SELECT first_name, last_name, username, user_id FROM user WHERE first_name ='" . $user->getUserId() . "'";
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