<?php
//Lesson 5. Task 49
// Подключение ключей в цикле foreach
//1
$arr=['green'=>'зеленый','red'=>'Красный','blue'=>'голубой'];
foreach ($arr as $key=>$arr['green']){
    echo $key."\n";   ///не уверен правильно ли . Нужно проверить.
    /// С помощью цикла foreach выведите на экран столбец ключей и элементов в формате green - зеленый.
}
//2 С помощью цикла foreach выведите на экран столбец строк такого формата: user1 - возраст 30 лет.
$arr = ['user1' => 30, 'user2'=> 32, 'user3' => 33];
foreach ($arr as $user1=>$elem){
    echo $user1.' возраст-'.$elem.' лет '."\n";
}
?>



