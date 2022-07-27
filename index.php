<meta charset="utf-8">
//Вывод русского  текста корректно
<?php

//Lesson 3. Task 16
// Принудительное преобразование типов
// Целые числа. .Используем int
//1
$test='12345';
var_dump((int)$test);
//2 Дроби через float
$test=(float)"12.345";
var_dump($test);

//3
$test='12.345';
var_dump((int)$test);

//4
$test=12335;
var_dump((string)$test);
//5
$test=(string) 12.345;
var_dump($test);
?>


