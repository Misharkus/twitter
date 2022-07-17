<?php
    // Створення твіту

    session_start();
    require_once 'connect.php';

    $twit = htmlspecialchars($_POST['twit']);
    $twit = urldecode($twit);
    $id_user = $_SESSION['user']['id'];

    mysqli_query($connect, "INSERT INTO `twits` (`id`, `id_user`, `twit`) VALUES (NULL, '$id_user', '$twit')");
    header('Location: ../twits.php');