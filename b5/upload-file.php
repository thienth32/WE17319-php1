<?php
$name = $_POST['name'];
$file = $_FILES['avatar'];
move_uploaded_file($file['tmp_name'], 
            './uploads/' . uniqid() . '-' . $file['name']);
echo "done";

?>