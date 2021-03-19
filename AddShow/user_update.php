<?php

    require 'setenv.php';
    require './utilities/config.php';

    $stmt = $con->prepare("UPDATE cs3620_proj.shows SET show_name=?, show_description=?, show_rating=? WHERE show_id=?");

    $sn = $_POST["show_name"];
    $sd = $_POST["show_discription"];
    $sr = $_POST["show_rating"];
    $id = $_POST["show_id"];

    $stmt->bind_param('sssi', $sn, $sd, $sr, $id);
    $stmt->execute();

    $stmt->close();

    $con->close();

    header('Location: profile.php');
?>