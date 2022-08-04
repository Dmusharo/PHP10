<?php
//Lesson 5. Task 65
//Получение чисел Фибоначи
// Числа Фибоначи   - это последовательность чисел котороая начинается с 0 и 1 а затем
// каждое последующее равно сумме двух предыдущих

//1 // Найти последовательность чисел Фибоначи
$one=0;
$two=1;
for ($i=1;$i<=10;$i++){
    $current=$one+$two;
    $one=$two;
    $two=$current;
    echo $current. '<br>';
}
//2  Найти последовательность ряда чисел, каждое из которых равно
// сумме трех предыдущих
$one=0;
$two=1;
$three=2;
for ($i=1;$i<=10;$i++){
    $current=$one+$two+$three;
    $one=$two;
    $two=$three;
    $three=$current;
    echo $current." ";
}

?>


