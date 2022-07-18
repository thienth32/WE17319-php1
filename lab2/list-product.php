<?php
require_once "db.php";

$products = getAll();
// echo "<pre>";
// var_dump($products);die;
?>

<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>
            <a href="create-product.php">Add</a>
        </th>
    </thead>
    <tbody>
        <?php foreach($products as $item ): ?>
            <tr>
                <td><?= $item[0] ?></td>
                <td><?= $item[1] ?></td>
                <td><?= $item[2] ?></td>
                <td>
                    <a href="remove-product.php?id=<?= $item[0] ?>">xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>