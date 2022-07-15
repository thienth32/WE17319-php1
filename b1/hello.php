<?php
// tạo biến
// tạo hàm
// tạo hằng số
// nhận dữ liệu từ request
// sinh ra giao diện cho người dùng
$hoten = $_GET['hoten'];
// hàm isset => dùng để kiểm tra xem 1 giá trị có tồn tại hay không
// trả về true/false
$tinhtranghonnhan = isset($_GET['is_married']) ? "Đã kết hôn" : "Độc thân";

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
<h3>Họ và tên: <?php echo $hoten ?></h3>
<p>Tình trạng hôn nhân: <?php echo $tinhtranghonnhan ?></p>
</body>
</html>