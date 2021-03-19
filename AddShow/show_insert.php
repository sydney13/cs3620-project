<?php

    require 'setenv.php';
    require './utilities/config.php';

$stmt = $con->prepare("INSERT INTO cs3620_proj.shows (`show_name`,
    `show_description`,
    `show_rating`) VALUES (?, ?, ?)");

    $sn = $_POST["show_name"];
    $sd = $_POST["show_description"];
    $sr = $_POST["show_rating"];

    $stmt->bind_param('sss', $sn, $sd, $sr);
    $stmt->execute();

    $stmt->close();
    $con->close();

    header('Location: profile.php');
?>