<?php

$arr = [1, 3, 5, 6, 7, 10, 17, 21, 12, 9, 4];

// Đếm số lượng các số chia hết cho 3 
// hiển thị giá trị nhỏ nhất và giá trị lớn nhất trong mảng
// Câu lệnh rẽ nhánh: chia trường hợp theo điều kiện nhất định để có thể xử
// lý riêng 
// vd: tuổi lấy vợ/chồng
// Nam: 18 tuổi mới đủ đk đăng ký kết hôn
// Nữ: 16 tuổi đã đủ điều kiện rồi
$name = $_GET['name'];
$year = $_GET['year'];
$gender = $_GET['gender'];
$age = 2022 - $year;
// nếu giới tính = nam và tuổi >= 18 thì đủ điều kiện
if(($gender == 1 && $age >= 18) || ($gender == 2 && $age >= 16)){
    echo "Đã đủ điều kiện kết hôn";
}else{
    echo "Không đủ điều kiện kết hôn";
}

