<?php
// nhận dữ liệu từ form
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// xây dựng câu sql để insert
$insertQuery = "insert into users 
                    (name, email, password)
                values 
                ('$name', '$email', '$password')";
// tạo kết nối & thực thi câu lệnh với db
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", 
    "root", "12345678");

//3.1 Nạp câu sql vào kết nối
$stmt = $connect->prepare($insertQuery);
// 3.2 Thực thi câu sql với db
$stmt->execute();
header('location: index.php');
?>