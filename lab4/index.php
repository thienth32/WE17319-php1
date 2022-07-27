<?php
// 1. Tạo câu sql để lấy dữ liệu từ db
$sqlQuery = "select * from users";
// 2. tạo kết nối từ php => mysql
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", 
    "root", "12345678");

//3.1 Nạp câu sql vào kết nối
$stmt = $connect->prepare($sqlQuery);
// 3.2 Thực thi câu sql với db
$stmt->execute();

// 4. Nhận dữ liệu trả về từ câu sql
$data = $stmt->fetchAll(); // lấy về tất cả các bản ghi tìm được từ câu sql
// $data = $stmt->fetch(); - lấy ra 1 bản ghi đầu tiên tìm đc từ câu sql

echo "<pre>";
var_dump($data);