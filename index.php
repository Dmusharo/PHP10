<?php
//Lesson 4. Task 34
//   Команда isset               !==
//Подавление аорнинга  isset  без ворнинга
//инвертирование высказывания
// Элементы массива
//1
$test=0;
if (isset($test)) {
    echo '+'; //null
} else {
    echo '-';
}
//2
$test=null;
if (!isset($test)) {
    echo '+'; // выведет +
} else {
    echo '-';
}
//3
$test=null;
if (isset($test)) {
    echo '+'; //
} else {
    echo '-';// выведет -
}
//4
if (!isset($test)) {
    echo '+'; // выведет +
} else {
    echo '-';
}
//5
$test='';
if (isset($test)) {
    echo '+'; //
} else {
    echo '-';
}
//6
if (!isset($test)) {
    echo '+'; //выведет +
} else {
    echo '-';
}
//7
$test=false;
if (isset($test)) {
    echo '+'; //выведет +
} else {
    echo '-';
}
//8
$arr = [1, 2, 3, 4, 5];
if (isset($arr)) {
    echo '+';
} else {
    echo '-';
}
?>


