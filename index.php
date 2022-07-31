<?php
//Lesson 4. Task 33
//   if -else булевы значение
//1
$test=true;
if ($test===true){
    echo '+';
} else {
    echo '-';
}
//2
$test=true;
if ($test===false){
    echo '+';
} else {
    echo '-';
}
//3
$test=1;
if ($test==true){
    echo '+';//+
} else {
    echo '-';
}
//4
$test=0;
if ($test==false){
    echo '+';//+
} else {
    echo '-'; //
}
//5
$test=1;
if ($test==true){
    echo '+';//+
} else {
    echo '-';
}
//6
$test=1;
if ($test!=true){
    echo '+';//
} else {
    echo '-';//-
}
//7
$test='';
if ($test==false){
    echo '+';//
} else {
    echo '-';//-
}
//8
$test=1;
if ($test==true){
    echo '+';//
} else {
    echo '-';//-
}
// Сокращенный иф

//9
$test=true;
if ($test){
    echo '+';
} else {
    echo '-';
}
//10
$test=true;
if (!$test){
    echo '+';
} else{
    echo '-';//-
}
//11
$test=true;
if (!$test) {
    echo '+';
} else {
    echo '-'; //-
}
//12
$test=true;
if ($test) {
    echo '+'; //+
} else {
    echo '-';
}
// Сравнеиние идет по == а не по ===      !!!!!!!!!!!
//13
$test=3;
if ($test) {
    echo '+';  //+
} else {
    echo '-';
}
//14
$test='abc';
if ($test) {
    echo '+'; //+
} else {
    echo '-';
}
//15
$test='';
if ($test) {
    echo '+';
} else {
    echo '-';//-
}
//16
$test=3*'abc';
if ($test) {
    echo '+';
} else {
    echo '-'; // - нельзя умножать
}
//17
$test=null;
if ($test) {
    echo '+';
} else {
    echo '-'; //-
}
//18
$test=false;
if ($test) {
    echo '+';
} else {
    echo '-';
}
//19
$test;   // выдает ошибку
if ($test) {
    echo '+';
} else {
    echo '-';
}
//20
$test=0;
if ($test) {
    echo '+';
} else {
    echo '-';//-
}
//21
$test='0';
if ($test) {
    echo '+';
} else {
    echo '-';//-
}
//22
$test=-1;
if ($test) {
    echo '+';//+
} else {
    echo '-';//
}
?>


