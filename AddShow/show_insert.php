<?php

    session_start();

    require './utilities/config.php';
    require 'setenv.php';

$stmt = $con->prepare("INSERT INTO cs3620_proj.shows (`show_name`,
    `show_description`,
    `show_rating`, `user_id`) VALUES (?, ?, ?)");

    $sn = $_POST["show_name"];
    $sd = $_POST["show_description"];
    $sr = $_POST["show_rating"];
    $userid = $_SESSION["user_id"];

    $stmt->bind_param('sss', $sn, $sd, $sr, $userid);
    $stmt->execute();

    $stmt->close();
    $con->close();

    header('Location: profile.php');
?>