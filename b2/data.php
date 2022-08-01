<?php

// tạo mảng $students
// mảng này gồm các mảng con chứa thông tin của các
// bạn sinh viên trong lớp bao gồm:
// roll_number, name, age, gender, major (chuyên ngành)
// trong đó nếu giới tính nam - 1, nữ - 2, khác - 3
// major: tkw - 1, lt mobile - 2, ptpm - 3, tkdh - 4
// tạo 3 sinh viên trong mảng students
$students = [
    [
        "roll_number" => "PH01679",
        "name" => "Thienth",
        "age" => 31,
        "gender" => 1,
        "major" => 3
    ],
    [
        "roll_number" => "PH01680",
        "name" => "SonTv8",
        "age" => 32,
        "gender" => 1,
        "major" => 1
    ]
];

// 1. hiển thị danh sách sinh viên ra thành table như ví dụ 
// (cập nhật đầy đủ các cột)
// 2. chuyển giới tính và chuyên ngành từ số thành text

?>

<table border="1">
    <?php for ($i=0; $i < count($students); $i++) { ?>
        <tr>
            <td><?php echo $students[$i]['roll_number']?></td>
            <td><?php echo $students[$i]['name']?></td>
            <td><?php echo $students[$i]['age']?></td>
        </tr>
    <?php } ?>
</table>