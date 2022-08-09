<?php
session_start();
$cart = $_SESSION['cart'];
$totalPrice = 0;
?>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
    </thead>
    <tbody>
        <?php foreach ($cart as $value): ?>
            <?php
                
                $totalPrice += $value['quantity']*$value['price'];    
            ?>
            <tr>
                <td><?= $value['id']?></td>
                <td><?= $value['name']?></td>
                <td><?= $value['price']?></td>
                <td><?= $value['quantity']?></td>
            </tr>
        <?php endforeach?>
        <tr>
            <td colspan="3">Tổng tiền</td>
            <td><?= $totalPrice?></td>
        </tr>
    </tbody>
</table>