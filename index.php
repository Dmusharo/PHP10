<?php
//Lesson 5. Task 47
// Накопление результата
$result=0;
for ($i=1;$i<=20;$i++){
    $result=$result+$i;
}
echo $result; //Сумма всех чисел 1 to 20
//2
$result=0;
for ($i=2;$i<=100;$i+=2){
    $result=$result+$i;
}
echo $result; //Сумма всех чисел 2 to 100 even numbers
//3 non even numbers from 1 to 99
$result=1;
for ($i=1;$i<=99;$i+=2){
    $result=$result+$i;
}
echo $result; //Сумма всех чисел
?>


