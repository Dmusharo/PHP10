// <meta charset="utf-8">
//Вывод русского  текста корректно
<?php

//Lesson 3. Task 19
// Операции инкремента и декремента
// оператор ++  это прибавление единицы -- отбавление 1
//1
$num=10;
$num++;
$num++;
$num--;
echo $num;
//Префиксный и постпрефиксный тип $a++ and ++$a;
//2
$num = 3;
echo ++$num; //выведет 4

//3
$num=3;
echo $num++; //выведет 3
//4
$num=3;
echo --$num; // выведет 2
//5
$num=3;
echo $num--; // выведет 3
//6
$num1=3;
$num2=++$num1;
echo $num1; //4
echo $num2; //4
//7
$num1=3;
$num2=$num1++;
echo $num1; //4 Повторить
echo $num2; //3
//8
$num1=3;
$num2=--$num1;
echo $num1; // 2
echo $num2; // 2
//9
$num1=3;
$num2=$num1--;
echo $num1;//2
echo $num2;//3
//10
$num1=3; //3
$num1++; //4
$num2=$num1--;
echo $num1++; //3
echo --$num2; //3


?>


