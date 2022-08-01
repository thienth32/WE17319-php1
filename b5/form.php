<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="uploads/62e7781787aa5-Banner_Mobile.png" alt="">
    <form action="submit-form.php" method="get">
        <label for="">Họ và tên</label>
        <input type="text" name="name">
        <br>
        <label for="">Sở thích</label>
        <fieldset>
            <input type="checkbox" name="so_thich[]" value="1"> Bóng đá
            <br>
            <input type="checkbox" name="so_thich[]" value="2"> Dã ngoại
            <br>
            <input type="checkbox" name="so_thich[]" value="3"> Ca hát
            <br>
            <input type="checkbox" name="so_thich[]" value="4"> Xem phim
            <br>
            
        </fieldset>
        <br>
        Quốc tịch:
        <select name="country[]" multiple id="">
            <option value="84">Việt Nam</option>
            <option value="1">Mỹ</option>
            <option value="2">Canada</option>
            <option value="25">Trung Quốc</option>
        </select>
        <br>
        <button type="submit">Lưu</button>
    </form>
</body>
</html>