<?php

    require 'setenv.php';
    require 'config.php';

$stmt = $con->prepare("INSERT INTO cs3620_proj.user (`username`,
    `password`,
    `first_name`,
    `last_name`) VALUES (?, ?, ?, ?)");

    $un = $_POST["username"];
    $fn = $_POST["first_name"];
    $ln = $_POST["last_name"];
    $pw = hash("sha256", trim($_POST['password']));

    $stmt->bind_param('ssss', $un, $pw, $fn, $ln);
    $stmt->execute();

    $stmt->close();
    $con->close();
?>