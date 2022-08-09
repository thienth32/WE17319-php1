<?php
session_start();
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: login.php');
    die;
}
// tạo kết nối & thực thi câu lệnh với db
require_once '../../lib/connect/db.php';
// nhận dữ liệu từ form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

//kiểm tra dữ liệu
$nameerr = "";
$emailerr = "";
$passworderr = "";
if(strlen($name) == 0){
    $nameerr = "Hãy nhập tên";
}

if(strlen($email) == 0){
    $emailerr = "Hãy nhập email";
}else{
    $sqlCheckEmail = "select 
                                count(*) as total 
                        from users 
                        where email = '$email'";
    $countData = executeQuery($sqlCheckEmail, false);
    if($countData['total'] > 0){
        $emailerr = "Email đã tồn tại, vui lòng chọn email khác";
    }
}

if(strlen($password) == 0){
    $passworderr = "Hãy nhập mật khẩu";
}

if(!empty($emailerr) || !empty($passworderr) || !empty($nameerr)){
    header("location: add-form.php?emailerr=$emailerr&passworderr=$passworderr&nameerr=$nameerr");
    die;
}
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// xây dựng câu sql để insert
$insertQuery = "insert into users 
                    (name, email, password)
                values 
                ('$name', '$email', '$password')";


//3.1 Nạp câu sql vào kết nối
executeQuery($insertQuery, false);
header('location: index.php');
?>