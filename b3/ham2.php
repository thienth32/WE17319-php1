<?php

// var_dump(1, 4, false, 9, true, "something");

// function to_upper_str(){

//     $arrTs = func_get_args();
//     $arrResult = [];
//     foreach ($arrTs as $key => $value) {
//         $arrResult[] = mb_strtoupper($value);
//     }
//     return $arrResult;
// }


// $arr = to_upper_str();
// var_dump($arr);

$arr = ["thienth", 'Poly', "loan béo", 'mai còi', 'minh lợn'];
$arr2 = array_map(function ($item) {
    return ucwords($item);
}, $arr);

// var_dump($arr2);
// explode(): chuyển chuỗi => mảng dựa vào 1 ký tự
// $str = "ph0003|Nguyễn Văn C|2003|1|WE17318";
// $arr = explode("|", $str);
// var_dump($arr);

// htmlentities(): chuyển chuỗi thành phần tử html
$str = "<script>console.log(1);</script>";

// echo $str;
// echo "<br>";
// echo htmlentities($str);

// implode(): chuyển mảng thành chuỗi

// lcfirst(): chuyển ký tự đầu tiên của 1 chuỗi => viết thường
// ltrim(): xóa khoảng trắng ở bên trái của chuỗi
$str = ",,,,,,something";
// echo ltrim($str, ',');
// echo $str;

// rtrim()
// trim()

// md5(): mã hóa chuỗi bằng thuật toán md5
// sha1(): mã hóa chuỗi bằng thuật toán sha1
// => sha1 & md5 có 1 điểm chung là 1 chuỗi cố định thì chỉ sinh ra 1 chuỗi mã hóa cố định

$str = '123456';
// echo sha1($str);
// password_hash()
// echo password_hash($str, PASSWORD_DEFAULT);
var_dump(password_verify("12345", '$2y$10$d7TnuQV4OMuoZXNGh6rY1.tic85VSRqVy78TU2a2Xf/ZJLtKwhf5S'));
// number_format()
// str_replace()
// str_split()
// strlen()
// strtolower()
// strtoupper()
// ucfirst()
// ucwords()




?>