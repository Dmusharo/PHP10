// <meta charset="utf-8">
//Вывод русского  текста корректно
<?php

//Lesson 4. Task 26
// Изменение элементов массива
//1

$arr=['a'=>1,'b'=>2,'c'=>3];
$arr['a']='c';
$arr['b']='a';
$arr['c']='b';
echo $arr['a'];
//Перезапись элементов .=: ---оператор
//2
$arr=['a'=>1,'b'=>2,'c'=>3];
$arr['a']=$arr['a']+3;
$arr['b']=$arr['b']+3;
$arr['c']=$arr['c']+3;
var_dump($arr);
//3
$arr=['a'=>1,'b'=>2,'c'=>3];
$arr['a']++; //1+1
$arr['a']++;//2+1
$arr['b']--; //2-1
$arr['c']--;//3-1
$arr['c']--;//2-1
var_dump($arr);

?>



