<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload-file.php" method="post" 
        enctype="multipart/form-data">
        <label for="">Họ và tên</label>
        <input type="text" name="name">
        <br>
        Ảnh: <input type="file" name="avatar">
        <br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>