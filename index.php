<?php
//Lesson 5. Task 54-55
//Инструкция continue -- упрощение кода. Перебрасывает на новую итерацию кода

// Работа с флагами
// Флаг это перемнная которая может принимать true or false

//1
//Проверьте, что в этом массиве есть элемент 'c'.
// Если есть - выведите 'да', а если нет - выведите 'нет'.
$arr=['a','b','c','d','e'];
$flag=false;
foreach ($arr as $item) {
    if ($item==='c'){
        $flag=true;
        break;
    }
}
if ($flag===true){
        echo 'Да';
    } else {
        echo 'Нет';
}


?>



