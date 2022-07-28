// <meta charset="utf-8">
//Вывод русского  текста корректно
<?php
//Lesson 4. Task 27
// Заполнение массивов
//1
$arr=[];
$arr[]=1;
$arr[]=2;
$arr[]=3;
$arr[]=4;
$arr[]=5;
echo $arr[1];
//2
$arr=[1,2,3];
$arr[]=4;
$arr[]=5;
echo $arr[3];
//3
$arr=[]; //можно не писать??
$arr['year']=2022;
$arr['month']=07;
$arr['day']=28;
var_dump($arr);

?>



