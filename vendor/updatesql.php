<?php
    session_start();
    require_once 'connect.php';
    $twit = htmlspecialchars($_POST['twit_update']);
    $twit = urldecode($twit);
    $id = $_GET['id'];

    mysqli_query($connect, "UPDATE `twits` SET `twit` = '$twit' WHERE `twits`.`id` = '$id'");
    header('Location: ../twits.php');
    