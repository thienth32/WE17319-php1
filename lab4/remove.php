<?php
$id = $_GET['id'];
$deleteQuery = "delete from users where id = $id";
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", 
    "root", "12345678");
$stmt = $connect->prepare($deleteQuery);
$stmt->execute();
header('location: index.php');