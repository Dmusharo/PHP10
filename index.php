// <meta charset="utf-8">
//Вывод русского  текста корректно
<?php

//Lesson 4. Task 23
// Ассоциативные Массивы
//1
$arr=[1=>'a',2=>'b',3=>'c'];
var_dump($arr);
//2
$arr=[1=>'январь','февраль',"март","апрель","май","июнь","июль"];
var_dump($arr);
//3
$arr=['name'=> 'denys','surname'=>'Musharov','patromymic'=>"victorovich"];
var_dump($arr);
echo $arr['surname'],' ', $arr['name'],' ',$arr['patromymic'];

//4
$data=['year'=>2022,'month'=>07,'day'=>28];
var_dump($data);
?>


