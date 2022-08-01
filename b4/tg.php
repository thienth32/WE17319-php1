<?php

// strtotime => chuyển đổi 1 chuỗi (có format năm-tháng-ngày) 
// => nhãn thời gian
$str = strtotime("03/02/1991");
// nếu muốn chuyển định dạng người dùng nhập từ form sang 
// định dạng lưu trong db
// thì sử dụng đoạn code dưới đây
$ymd = DateTime::createFromFormat('d/m/Y', '03/02/1991')
                ->format('Y-m-d');
// var_dump($ymd);die;
// date 
// ts1: format muốn hiển thị (tham khảo: 
    // https://www.php.net/manual/en/datetime.format.php)
// ts2: nhãn thời gian 
// $d = date('F d, Y', $timelabel);
// var_dump($d);

var_dump(date_parse_from_format('d/m/Y', '03/02/1991'));

?>
