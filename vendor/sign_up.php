<?php

    session_start();
    require_once 'connect.php';
    
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];


    if ($password === $password_confirm) {
        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`)
        VALUES (NULL, '$login', '$email', '$password')");

        $_SESSION['message'] = 'Регістрація пройшла успішно';
        header('Location: ../index.php');
    } else {
        $_SESSION['alert'] = 'Паролі не співпадають';
        header('Location: ../register.php');
    }



    ?>