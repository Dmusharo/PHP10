<?php
//Lesson 5. Практика 23 задания
//1
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;
echo $var;
//2
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;
//3
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result;
//4
$name = 'Денис';
echo 'Привет, ' . $name;
//5
$num = '12345';
$sum = 0;
$length = strlen($num);
for ($i = 0; $i < $length; $i++) {
    $sum += $num[$i];
} echo $sum;
//6
$m = 60;
$h = $m * 60;
$day = $h * 24;
$month = $day * 30;
echo "Секунд в часе =" . $h . " В сутках =" . $day . " В месяце =" . $month;
//7
$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo $text;
//8
$var = 10;
$var += 1;
$var += 1;
$var -= 1;
echo $var;
//9
$arr = ['Привет ', "мир ", "!"];
$text = $arr[0] . $arr[1] . $arr[2];
echo $text;

//10
$arr = [
    'ru' => ['голубой', 'красный', 'зеленый'],
    'en' => ['blue', 'red', 'green'],
];
foreach ($arr as $key => $val) {
    echo $key . " " . "--" . $val[0] . "\n";
}
//11
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
foreach ($arr as $key => $val) {
    if ($key === 'c') {
        echo $key;
    }
}
//12
$arr = ['Коля' => '1000$', 'Вася' => '500$', 'Петя' => '200$'];
foreach ($arr as $key => $value) {
    if ($key === 'Коля' or $key === 'Петя') {
        echo $key . ' ' . $value . '<br>';
    }
}
//13
$a = 10;
if ($a === 10) {
    echo "Верно";
} else {
    echo "Не верно";
}
//14
$min = 43;
if ($min <= 15) {
    echo "1 четверть";
}  if ($min > 15 and $min <= 30) {
    echo "2 четверть";
} if ($min > 30 and $min <= 45) {
    echo "3 четверть";
} if ($min > 45 and $min <= 60) {
    echo "4 четверть";
}
//15
///////////////////////////1
$lang = 'ru';
if ($lang === 'ru') {
    echo 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс';
} if ($lang === 'en') {
    echo 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su';
}
/////////////////////////////2
$lang = 'ru';
switch ($lang) {
    case 'ru':
        echo 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс';
        break;
    case 'en':
        echo 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su';
        break;
}
///////////////////////////////3
$lang = 'en';
$arr = [
    'ru' => ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
    'en' => ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
];
foreach ($arr as $key => $value) {
    var_dump($arr[$lang]);
    break;
}

//16
$a = null;
if ($a === null) {
    echo "Верно";
} else {
    echo "Не верно";
}
//17
$a = 3;
if (isset($a)) {
    echo "Верно";
} else {
    echo "Не верно";
}
//18
$var=false;
if ($var!=true) {
    echo "Верно";
} else{
    echo "Не верно";
}
//19
$month=3;
switch ($month){
    case ($month<=2 or $month==12):
        echo "Зима";
        break;
    case ($month>2 and $month<=5):
        echo "Весна";
        break;
    case ($month>5 and $month<=8):
        echo "Лето";
        break;
    case($month>8 and $month<=11):
        echo "Осень";
        break;
}
//20
$year=2024;

if (($year%4==0 and $year%100!=0) or $year%400==0) {
    echo "Год високосный";
} else {
    echo "Год не високосный";
}
//21
$a="abcde";
if ($a[0]=="a") {
    echo " Да ";
} else{
    echo "Нет";
}
//22
$str="12345";
if ($str[0]==1 or $str[0]==2 or $str[0]==3){
    echo "Да";
} else {
    echo "Нет";
}
//23
$str="123456";
if ($str[0]+$str[1]+$str[2]==str[3]+$str[4]+$str[5]){
    echo "Да";
} else {
    echo "Нет";
}
?>


