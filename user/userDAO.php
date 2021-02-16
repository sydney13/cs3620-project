<?php
class UserDAO {
  function getUser($user){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT FirstName, LastName, userName, user_id FROM user WHERE user_id =" . $user->getUserId();
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["FirstName"]);
        $user->setLastName($row["LastName"]);
        $user->setUsername($row["userName"]);
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
    `userName`,
    `password`,
    `FirstName`,
    `LastName`)
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