<?php
    session_start();
    require_once 'vendor/connect.php';
    $twits = mysqli_query($connect, "SELECT * FROM `twits`");
    $twits = mysqli_fetch_all($twits);
    $user_login = $_SESSION['user']['login'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/twits.css">
    <title>Стіна</title>
</head>
<body>
   
    <form action="vendor/create_twit.php" method="POST">
        <p>Твіт</p>
        <textarea placeholder="Додайте ваш твіт" name="twit"></textarea>
        <button type="submit">Додати</button>     
    </form>

    <div><h2>Твіти інших користувачів</h2></div>
    <?php 
        foreach ($twits as $twit) { ?>
            <table>
                <tr>
                    <th><?= $twit['1'] ?></th>
                </tr>
                <tr>
                    <td><?= $twit['2'] ?></td>
                    <td><a href = "update_twit.php?id=<?= $twit[0] ?>">&#9998;</a></td>
                </tr>
        
        <?php
        }
        ?>
        
    </table>
    
        
    
</body>
</html>