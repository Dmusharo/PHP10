<meta charset="utf-8">
//Вывод русского  текста корректно
<?php
// echo "Hello Git";
//Lesson 3 task 1
error_reporting(E_ALL); //вывод ошибок в браузере. Notice -проверить код и устранить Warning-запуститься но может не так работать   Fatal-PHP не может быть выполнен. Проверить синтаксис программы
ini_set("display_errors", "on"); // Если не работает первая. Разница в настройках сервера
mb_internal_encoding("UTF-8"); //Вывод русского  текста корректно
// errorr_reporting(0);  что бы сайт работал и ошибки не показывались
include "Code.php";

//lesson 3 task 2
var_dump('12345'); // 'выведет 12345' и тип выводимых данных
/*
 * В круглых скобках пишем параметры функции. Несколько параметров пишем через запятую.
 */

// Lesson 3. Task 3
// Переменные PHP
$num=123; // Записываем значение 123 в переменную
echo $num; //  Вывод знаячения переменной на экран

$a=10; // set variable value
echo $a; // display value
$b=20;
echo $b;
/*
 * Выведет последовательно 1020
 */

// Lesson 3. Task 4
// Математические операции
$a=1+2+3;
echo $a;
// Sum values of variable and show result in browser


?>


