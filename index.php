<meta charset="utf-8">
//Вывод русского  текста корректно
<?php

//Lesson 3. Task 17
// Получение символов строки
//1
$str='abcde';
echo $str[0],$str[2],$str[4];
//2
$str='abcde';
echo $str[4],$str[3],$str[2],$str[1],$str[0];
//3
$str='abcde';
$num=3;
echo $str[$num];
//4 strlen  Функция для нахождения длины строки

$str='abcdeddl';
echo $str[strlen($str)-1];
//5
$str='abcdeddl';
echo $str[strlen($str)-2];
//6
$str='abcdeddl';
echo $str[strlen($str)-3];

//7
$str="12345";
echo '$str[0]+$str[1]+$str[2]+$str[3]+$str[4]';
//8
$a=12345;
$str=(string)$a;
echo $str[0]+$str[1]+$str[2]+$str[3]+$str[4];
//9
echo $str[0]*$str[1]*$str[2]*$str[3]*$str[4];
//10
$a=12345;
$str=(string)$a;
echo $str[4],$str[3],$str[2],$str[1],$str[0];

?>


