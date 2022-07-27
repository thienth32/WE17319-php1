<?php
$a = 10;
function test(&$x){
    $x = 15;
    echo $x;
}

test($a);
echo "<br>";
echo $a;

?>