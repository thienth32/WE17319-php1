<?php
require_once 'db.php';
$id = $_GET['id'];
$name = $_GET['name'];
$price = $_GET['price'];
$products = getAll();
$index = -1;
foreach($products as $key => $value){
    if($value[0] == $id){
        $index = $key;
        break;
    }
}
$products[$index][1] = $name;
$products[$index][2] = $price;
saveFileByArr($products);
header("location: list-product.php");
?>