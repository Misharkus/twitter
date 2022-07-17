<?php
    session_start();
    require_once 'vendor/connect.php';
    $twit_id = $_GET['id'];
    $twit = mysqli_query($connect, "SELECT * FROM `twits` WHERE `id`='$twit_id'");
    $twit = mysqli_fetch_assoc($twit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/twits.css">
    <title>Редагування твіту</title>
</head>
<body>
    <h2>Редагування твіту</h2>
    <form action="vendor/updatesql.php" method="POST">
        <textarea name="twit_update"><?=$twit['twit']?></textarea>
        <button type="submit">Редагувати</button>
    </form>
   
</body>
</html>