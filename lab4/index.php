<?php
session_start();
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: login.php');
    die;
}
// 1. Tạo câu sql để lấy dữ liệu từ db
$sqlQuery = "select * from users";
// 2. tạo kết nối từ php => mysql
$connect = new PDO("mysql:host=127.0.0.1;dbname=php1;charset=utf8", 
    "root", "12345678");

//3.1 Nạp câu sql vào kết nối
$stmt = $connect->prepare($sqlQuery);
// 3.2 Thực thi câu sql với db
$stmt->execute();

// 4. Nhận dữ liệu trả về từ câu sql
$data = $stmt->fetchAll(); // lấy về tất cả các bản ghi tìm được từ câu sql
// $data = $stmt->fetch(); - lấy ra 1 bản ghi đầu tiên tìm đc từ câu sql
?>
<table border="1">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>
            <a href="add-form.php">Add</a>
        </th>
    </thead>
    <tbody>
        <?php foreach($data as $u): ?>
            <tr>
                <td>
                    <?= $u['name']?>
                </td>
                <td>
                    <?= $u['email']?>
                </td>
                <td>
                    <?= $u['avatar']?>
                </td>
                <td>
                    <a href="edit.php?id=<?= $u['id']?>">Edit</a>
                    <a href="remove.php?id=<?= $u['id']?>">Remove</a>
                </td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>