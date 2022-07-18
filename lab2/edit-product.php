<?php
require_once 'db.php';
$products = getAll();
$id = $_GET['id'];
$item = [];
foreach($products as $value){
    if($value[0] == $id){
        $item = $value;
        break;
    }
}
// var_dump($item);die;
?>
<form action="save-edit.php">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div>
        Name: <input type="text" name="name" value="<?= $item[1] ?>">
    </div>
    <div>
        Price: <input type="number" name="price" value="<?= trim($item[2]) ?>">
    </div>
    <button type="submit">Save</button>
</form>