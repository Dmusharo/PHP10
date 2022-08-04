<?php
//Lesson 5. Task 67
// Заполнение массивов с накоплением строки
$arr = [];
$str = '';
for ($i = 0; $i < 5; $i++) {
    $str .= 'x' . 'x';
    $arr[] = $str;
}

var_dump($arr); //  'xx', 'xxxx', 'xxxxxx', 'xxxxxxxx', 'xxxxxxxxxx'

//2 Заполнение массива числами
$arr = [];
for ($i = 1; $i < 6; $i++) {
    $str = '';
    for ($j = 0; $j < 5; $j++) {
        $str .= $i;
    }
    $arr[] = $str;
}
var_dump($arr);
?>


