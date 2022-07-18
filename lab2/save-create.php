<?php
require_once 'db.php';
$name = $_GET['name'];
$price = $_GET['price'];

$products = getAll();
$maxId = -1;
foreach ($products as $key => $value) {
    if($maxId < $value[0]){
        $maxId = $value[0];
    }
}
$maxId++;
$products[] = [$maxId, $name, $price];
saveFileByArr($products);
header("location: list-product.php");
?>