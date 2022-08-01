<?php
// require_once '../../lib/connect/db.php';
// echo DATA_FILE;
// mkdir('uploads');
// echo "done";
$files = scandir('../lab2');
// var_dump($files);
foreach($files as $f){
    echo $f;
    echo "<br>";
}
?>