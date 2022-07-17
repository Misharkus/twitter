<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Twitter 2.0</title>
</head>
<body>
    <!-- Форма регістрації-->

    <form action="vendor/sign_up.php" method="POST">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть ваш логін" required>
        <label>E-mail</label>
        <input type="email" name="email" placeholder="Введіть вашу пошту" required>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть ваш пароль" minlength="5" required>
        <label>Підтвердження пароля</label>
        <input type="password" name="password_confirm" placeholder="Підтвердіть ваш пароль" required>
        <button type="submit">Зареєструватися</button>
        <p>
            У вас вже є аккаунт? - <a href="index.php">Авторизуйтесь</a>!
        </p>
        <?php
            if ($_SESSION['alert']) {
                echo '<p class ="alert">' . $_SESSION['alert'] . '</p>';
            }
                unset($_SESSION['alert']); 
        ?>

       
            
        

        
        
</body>
</html>