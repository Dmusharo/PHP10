<?php
//Lesson 5. Task 66
//Вывод пирамидок
//1 Вывести пирамидку с ХХ
$str="";
for ($i=0;$i<5;$i++){
    $str.="xx";
    echo $str.'<br>';
}

//2  Вывести пирамидку
/*
 1
333
55555
7777777
999999999
 */
for ($i = 1; $i <= 9; $i++) {
    $str = ''; // каждый раз зачищаем строку

    for ($j = 1; $j <= $i; $j++) {
        $str .= $i;
    }
    if ($str%2!=0){
        echo $str . '<br>';
    }

}

//3
/*
xxxxxxxxxx
xxxxxxxx
xxxxxx
xxxx
xx
 */
for ($i = 5; $i >= 1; $i--) {
    $str = '';

    for ($j = 0; $j < $i; $j++) {
        $str .= 'xx';
    }

    echo $str . '<br>'; //Вывести пирамидку
}

//4
for ($i = 9; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }

    echo '<br>';
}
?>


