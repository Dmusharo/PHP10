// <meta charset="utf-8">
//Вывод русского  текста корректно
<?php
//Lesson 4. Task 31
// Сложные условия if -else . Лоническое и
//1
$num=3;
if ($num>0 and $num<5){
    echo "+";
} else {
    echo "-";
}
//2
$num=3;
if ($num>=10 and $num<=20){
    echo "+";
} else {
    echo "-";
}
//3
$num1=4;
$num2=3;
if ($num1<=1 and $num2>=3){
    echo '+';
} else {
    echo '-';
}
//4
$num1=-10;
$num2=-10;
if ($num1>=0 or $num2>=0){
    echo '+';
} else{
    echo '-'; //-
}
//5
$num1=0;
$num2=0;
if ($num1>=0 or $num2>=0) {
    echo '+'; //0
} else {
    echo '-';
}
//6
$num1=0;
$num2=5;
if ($num1>=0 or $num2>=0) {
    echo '+';
} else {
    echo '-';
}
//7 === +
//8 == +
//9 == +
//10 == -
//11 == +
//Приоритет операции сравнений and  выше чем or
// групировка условий

//12
$num=3;
if (($num>5 and $num<10) or $num==20){
    echo '+';
} else {
    echo '-';
}
//13
$num=3;
if (($num>5 and $num<0) or $num<3){
    echo '+';
} else {
    echo '-'; //-
}
//14
$num=3;
if ($num==9 or $num>10 and  $num<20 or $num>20 and $num1<30){
    echo '+';
} else {
    echo '-';
}
?>


