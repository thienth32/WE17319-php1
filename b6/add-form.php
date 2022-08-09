<?php
session_start();
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: login.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save-add.php" method="post">
        <div>
            Name: <input type="text" name="name">
            <?php if(isset($_GET['nameerr'])):?>
                <span style="color: red"><?= $_GET['nameerr']?></span>
            <?php endif ?>
        </div>
        <div>
            Email: <input type="text" name="email">
            <?php if(isset($_GET['emailerr'])):?>
                <span style="color: red"><?= $_GET['emailerr']?></span>
            <?php endif ?>
        </div>
        <div>
            Pasword: <input type="password" name="password">
            <?php if(isset($_GET['passworderr'])):?>
                <span style="color: red"><?= $_GET['passworderr']?></span>
            <?php endif ?>
        </div>
        <div>
            Avatar: <input type="file" name="avatar">
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
</body>
</html>