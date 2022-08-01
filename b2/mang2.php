<?php
// mảng key là số index
$arr = [1,4,8,3,9,11];
// thêm 1 phần tử vào cuối mảng
$arr[] = 100;
// sửa 1 phần tử với key đã xác định
$arr[2] = 10;
// xóa 1 phần tử khỏi mảng
unset($arr[3]);
// mảng có key là chữ
$arr2 = [
    "name" => "FPT Poly",
    "age" => 13,
    "childrens" => [
        "FPI",
        "Phổ cao"
    ]
];
// thêm 1 phần tử vào mảng
$arr2['address'] = "số 1 trịnh văn bô";
// sửa phần tử trong mảng
$arr2["age"] = 12;
// xóa phần tử
unset($arr2['childrens']);

// ** Lưu ý: với mảng có chứa phần tử key là dạng chữ
// thì không sử dụng vòng lặp for $i để gọi các giá trị của mảng ra được
// cần sử dụng loại vòng lặp foreach 
// for ($i=0; $i < count($arr2); $i++) { 
//     echo $arr2[$i] . "<br>";
// }

// từ khóa foreach
// $arr2: tên mảng
// $key: giá trị của key của phần tử
// $value: giá trị tương ứng của phần tử
foreach($arr2 as $key => $value){
    var_dump($key);
    var_dump($value);
    echo "<br>";
}




?>