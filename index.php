<?php
//Lesson 5. Task 48
// Цикл foreach
//1
$arr=['a','b','c','d','e'];
foreach ($arr as $elem){
    echo $elem;  //Вывести все элементы массива
}
//2 Найти сумму элементов массива
$arr=[1,2,3,4,5,6,7,8,9];
$sum=0;
foreach ($arr as $elem){
    $sum+=$elem;
}
echo $sum;
//3 Найти среднее арифметическое
$arr=[1,2,3,4,5,6,7,8,9];
$num=count($arr);
$sum=0;
foreach ($arr as $elem){
    $sum+=$elem;
}
echo $sum/$num;
?>


