<?php
session_start();
require_once '../../lib/connect/db.php';
$sqlGetProducts = "select * from products";
$products = executeQuery($sqlGetProducts, true);

?>

<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach($products as $p): ?>
            <tr>
                <td><?= $p['id']?></td>
                <td><?= $p['name']?></td>
                <td><?= $p['price']?></td>
                <td>
                    <a href="add-to-cart.php?id=<?= $p['id']?>">Thêm giỏ hàng</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>