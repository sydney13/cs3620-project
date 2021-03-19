<?php
   session_start();

   ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

   require_once('./user/user.php');

    $user = new user();
    
    if(isset($_GET["id"])){
        $user->getUser($_GET["id"]);
    }
    if(isset($_GET["username"])){
        $user->getTheUserName($_GET["username"]);
    }
    if(isset($_GET["first_name"])){
        $user->getTheFirstName($_GET["first_name"]);
    }
    if(isset($_GET["last_name"])){
        $user->getTheLastName($_GET["last_name"]);
    }

    echo json_encode($user);
?>