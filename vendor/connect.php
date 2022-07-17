<?php
    $connect = mysqli_connect('localhost', 'root', '', 'twitter');

    if(!$connect) {
        die('Помилка підключення до бази даних');
    }
