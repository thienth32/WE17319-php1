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
        </div>
        <div>
            Email: <input type="text" name="email">
        </div>
        <div>
            Pasword: <input type="password" name="password">
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