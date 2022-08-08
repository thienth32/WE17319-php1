<?php
session_start();
require_once '../../lib/connect/db.php';
// nhận dữ liệu từ form
$email = $_POST['email'];
$password = $_POST['password'];
// dựa vào email tìm kiếm trong csdl lấy ra bản ghi đầu tiên tìm được
$sqlQuery = "select * from users where email = '$email'";
$stmt = $connect->prepare($sqlQuery);
$stmt->execute();
$user = $stmt->fetch();

// so sánh mật khẩu ng dùng gửi lên và mật khẩu trong db
if($user && password_verify($password, $user['password'])){
    // nếu khớp thì tạo session auth và chuyển hướng website sang trang a.php    
    unset($user['password']);
    $_SESSION['auth'] = $user;
    header('location: a.php');
    die;
}
// nếu không tìm thấy bản ghi dựa vào email hoặc không khớp được mật khẩu
// thì điều hướng ngược về trang login
header('location: login.php?msg=Tài khoản/mật khẩu không chính xác');
?>