<?php
session_start();
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: login.php');
    die;
}
// tạo kết nối & thực thi câu lệnh với db
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", 
    "root", "12345678");
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
    $stmt = $connect->prepare($sqlCheckEmail);
    $stmt->execute();
    $countData = $stmt->fetch();
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
$stmt = $connect->prepare($insertQuery);
// 3.2 Thực thi câu sql với db
$stmt->execute();
header('location: index.php');
?>