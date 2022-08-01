<?php
//Lesson 4. Task 42
//Объединение с  Null
//1 Тетрарный оператор
$user=['name'=>'john','age'=>30];
$name=$user['name'] ?? 'unknown';

//Цепочка
$result=$user['name']??$user['surname']??'';

?>


