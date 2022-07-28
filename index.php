// <meta charset="utf-8">
//Вывод русского  текста корректно
<?php
//Lesson 4. Task 30
// Типы данных и конструкция if-else
// Число в кавычках такое же как и строка. "3"=3
// оператор ===  сравнивает значение и тип данн
//1
$test1="3";
$test2='3';
if ($test1==$test2) {
    echo '+'; //+
} else {
    echo '-';
}
//2
$test1="3";
$test2='3';
if ($test1===$test2) {
    echo '+';//+
} else {
    echo '-';
}
//3
$test1=3;
$test2='3';
if ($test1==$test2) {
    echo '+'; //+
} else {
    echo '-';
}
//4
$test1=3;
$test2='3';
if ($test1===$test2) {
    echo '+'; //
} else {
    echo '-';//- т.к разный тип данных
}
//5
$test1=3;
$test2=3;
if ($test1===$test2) {
    echo '+'; // +
} else {
    echo '-';//
}
//6
//Неравенство по значению и типу
$test1='3';
$test2='3';
if ($test1!=$test2) {
    echo '+'; // +
} else {
    echo '-';// т.к занчения равны
}
//7
$test1='3';
$test2='3';
if ($test1!==$test2) {
    echo '+'; // +
} else {
    echo '-';// т.к занчения равны
}
//8
$test1=3;
$test2='3';
if ($test1!=$test2) {
    echo '+'; // +
} else {
    echo '-';// т.к занчения равны
}
//9
$test1=3;
$test2='3';
if ($test1!==$test2) {
    echo '+'; // +т.к занчения равны, но разный тип
} else {
    echo '-';//
}
//10
$test1=3;
$test2=2;
if ($test1!==$test2) {
    echo '+'; // +т.к занчения не равны
} else {
    echo '-';//
}
// Заметки!!!   0=='' and 0=="0"  это одно и тоже

?>



