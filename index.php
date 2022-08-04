<?php
//Lesson 5. Task 68
// Обработка циклов

// 1 Вывести с помощью цикла столбец чисел от 1 до 100
for ($i = 1; $i <= 100; $i++) {
    echo $i . '<br>';
}

//2 вывести в обратном поряндке
for ($i = 100; $i >= 1; $i--) {
    echo $i . '<br>';
}

//3 Выведите с помощью цикла столбец четных чисел от 1 до 100.
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . '<br>';
    } else {
        continue;
    }
}
//4   Заполните массив 10-ю иксами с помощью цикла.
$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = "x";
}
var_dump($arr);

//5 Заполните массив числами от 1 до 10 с помощью цикла.
$arr = [];
for ($i = 0; $i <= 10; $i++) {
    $arr[] += 1;
}
var_dump($arr);
//6 Дан массив с числами. С помощью цикла выведите только те элементы массива, к
//оторые больше нуля и меньше 10-ти
$arr = [1, 4, 5, 15, -3, 17];
foreach ($arr as $item) {
    if ($item > 0 and $item < 10) {
        echo $item . " ";
    }
}
//7  Проверить есть ли 5 в массиве
$arr = [1, 4, 5, 15, -3, 17];
$flag = false;
foreach ($arr as $item) {
    if ($item == 5) {
        $flag = true;
        break;
    }
}
echo $flag;;
//8 Дан массив с числами.
// С помощью цикла найдите сумму элементов этого массива.
$arr = [1, 4, 5, 15, -3, 17];
$sum = 0;
foreach ($arr as $item) {
    $sum += $item;
}
echo $sum;
//9 Дан массив с числами. С помощью цикла найдите
// сумму квадратов элементов этого массива.
$arr = [1, 4, 5, 15, -3, 17];
$sum = 0;
foreach ($arr as $item) {
    $sum += $item * $item;
}
echo $sum;
//10  Дан массив с числами. Найдите среднее арифметическое его элементов
// (сумма элементов, делить на количество).
$arr = [1, 2, 3, 4, 5, 6];
$sum = 0;
$length = count($arr);
$sum1 = 0;
foreach ($arr as $item) {
    $sum += $item;
    $sum1 = $sum / $length;
}
echo $sum1;
//11
$f = 3;
$s = 0;
for ($i = 0; $i <= $f; $i++) {
    $s = $i * $i;
}
echo $s;
//12  Напишите скрипт, который будет находить факториал числа.
$f = 6;
$s = 1;
for ($i = 1; $i < $f + 1; $i++) {
    $s = $s * $i;
}
echo $s;
?>


