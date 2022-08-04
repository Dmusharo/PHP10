<?php
//Lesson 5. Task 63
// Практика на массивы в цикле

//1
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
$lenth = count($arr);
for ($i = 1; $i <= $lenth; ++$i) {
    $arr['employee' . $i] = $arr['employee' . $i] * 0.10 + $arr['employee' . $i];
}
var_dump($arr); //Увеличьте зарплату каждого работника на 10%.

//2
/*
 * Модифицируйте предыдущую задачу так, чтобы зарплата увеличивалась только тем работникам,
 * у которых она меньше или равна 400.
 */
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
$lenth = count($arr);
for ($i = 1; $i <= $lenth; ++$i) {
    if ($arr['employee' . $i] <= 400) {
        $arr['employee' . $i] = $arr['employee' . $i] * 0.10 + $arr['employee' . $i];
    }
}
var_dump($arr);
//3 Найдите сумму ключей этого массива и поделите ее на сумму значений.
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$lenth = count($arr);
$sumKey = 0;
$sumVal = 0;
for ($i = 1; $i <= $lenth; $i++) {
    $sumKey += $i;
    $sumVal += $arr[$i];
}
echo $sumKey / $sumVal; //0.375


//4
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5]; //Запишите ключи этого массива в один массив, а значения - в другой.
$arrKey = [];
$arrVal = [];
foreach ($arr as $item => $value) {
    $arrKey[] = $item;
    $arrVal[] = $value;
}
var_dump($arrVal, $arrKey);

//5
$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];
$arr1 = [];;
foreach ($arr as $item) {
    if (strval($item)[0] == 1 or strval($item)[0] == 2) {
        $arr1[] = $item;
    }
}
var_dump($arr1); //Запишите в новый массив элементы, значение которых начинается с цифры
// 1 или цифры 2.
// То есть у вас в результате получится вот такой массив
?>


