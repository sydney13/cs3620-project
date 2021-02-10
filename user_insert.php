<?php 

echo $_POST["username"];
echo $_POST["firstname"];
echo $_POST["lastname"];
echo $_POST["password"];

require_once('./user/user.php');

    $user = new user();
    $user->setUsername($_POST["username"]);
    $user->setFirstName($_POST["firstname"]);
    $user->setLastName($_POST["lastname"]);
    $user->setPassword($_POST["password"]);


?>