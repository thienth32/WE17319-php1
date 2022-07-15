<?php
// mảng là kiểu dữ liệu giúp chứa tập hợp các giá trị
// (phần tử), mỗi phần tử trong mảng được xác định = tổ hợp 
// key => value
// các phần tử trong mảng thì không nhất thiết phải 
// có cùng kiểu dữ liệu
$arr = [
    "name" => "Đặng Quang Minh",
    "age" => 32,
    "is_married" => true,
    "childrens" => [
        "Bún",
        "Boom"
    ]
];
// để tương tác với các phần tử trong mảng thì cần sử dụng 
// tên biến + key của phần tử muốn sử dụng
// lấy ra giá trị của phần tử
echo $arr["name"];
echo "<br>";
// lấy ra tên của đứa con thứ 2
echo $arr["childrens"][1];
echo "<br>";
// cập nhật giá trị của phần tử
echo $arr["age"];
echo "<br>";
$arr["age"] = 33;
echo $arr["age"];
echo "<br>";
echo "<pre>";
var_dump($arr);
// die;
$arr["wife"] = "Lương Thu Trà";
var_dump($arr);
$arr["childrens"][] = "Bánh mì";
var_dump($arr);
unset($arr["childrens"][1]);
unset($arr["age"]);
var_dump($arr);
?>