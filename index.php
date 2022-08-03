<?php
//Lesson 5. Task 61
// Цикл for  для массивов
//1
$arr = ['a', 'b', 'c', 'd', 'e'];  //С помощью цикла for выведите все эти элементы на экран.
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    echo $arr[$i];
}

//2
$arr = ['a', 'b', 'c', 'd', 'e'];  //С помощью цикла for выведите все эти элементы на экран.
$length = count($arr);
for ($i = 0; $i < $length - 1; $i++) {
    echo $arr[$i];
}
//3
$arr = [1, 2, 3, 4, 5, 6, 7, 8];  //С помощью цикла for выведите на экран первую половину элементов этого массива.
$length = count($arr);
for ($i = 0; $i < $length / 2; $i++) {
    echo $arr[$i];
}
//4
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
}
echo $sum;


?>



