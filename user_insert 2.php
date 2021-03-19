<?php 

session_start();

require_once('./user/user.php');

    $user = new user();
    $user->setUsername($_POST["username"]);
    $user->setFirstName($_POST["firstname"]);
    $user->setLastName($_POST["lastname"]);
    $user->setPassword($_POST["password"]);
    $user->createUser();


?>