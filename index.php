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
    
    <!--Форма авторизації -->

    <form action="vendor/sign_in.php" method="POST">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть ваш логін" required>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль" required>
        <button type="submit">Увійти</button>
        <p>
            У вас немає акаунту? - <a href="register.php">Зареєструйтесь</a>!
        </p>
        
        <?php
        echo $check_user;
            if ($_SESSION['alert']) {
                echo '<p class ="alert">' . $_SESSION['alert'] . '</p>';
            }

            unset($_SESSION['alert']); 

            if ($_SESSION['message']) {
                echo '<p class ="message">' . $_SESSION['message'] . '</p>';
            }

            unset($_SESSION['message']); 
        
        ?>

        

    </div>  
</body>
</html>