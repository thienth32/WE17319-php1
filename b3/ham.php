<?php

// function tinh_tong($a, $b = 0){
//     var_dump($a, $b);
//     return $a + $b;
// }

// echo tinh_tong($b = 3, $a = 5);

// function check_existed($arr, $value){
//     foreach ($arr as $item) {
//         if($item == $value){
//             return true;
//         }
//     }
//     return false;
// }
$originalArr = [1,3,4,5,6,7,8,2];
// var_dump(check_existed($originalArr, 10));

function convert_arr(){
    // chuyển toàn bộ giá trị của mảng thành số bình phương của nó
    global $originalArr;
    for ($i=0; $i < count($originalArr); $i++) { 
        $originalArr[$i] = $originalArr[$i]*$originalArr[$i];
    }
}
echo "<pre>";
var_dump($originalArr);
convert_arr();
var_dump($originalArr);