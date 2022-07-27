<meta charset="utf-8">
//Вывод русского  текста корректно
<?php

//Lesson 3. Task 12
//HTML  tags
//1
$str1='Hello';
echo '<i>'.$str1;
// <i>  вывод курсивного текста
// <br>

//Атрибуты тегов
//<img> вывод на экран картинки
// <input> инпут с текстом
//<textarea> - многострочное поле ввода с текстом

//2
echo "<br>"."1","\n";
echo "<br>"."2","\n";
echo "<br>"."3","\n";
echo "<br>"."4","\n";
echo "<br>"."5","\n";
echo "<br>"."6","\n";
echo "<br>"."7","\n";
echo "<br>"."8","\n";
echo "<br>"."9","\n";

$start=1;
$end=9;
for ($i=$start;$i<=$end;$i++){
    echo "<br>".$i,"\n";
}

//3
$img="<img src=/home/dsim/PhpstormDenys2/PHP10/images.png";
echo $img; //проверить на виртуальном сервер

//4

$input = '<input type="text" placeholder="Hi,push">';
echo '<br>' . $input;

//5
$textarea = '<textarea rows="10" cols="40" placeholder="Dino TRex из оффлайн-игры в браузере, забавная пасхалка. Очень просто, супервесело. Просто наслаждайтесь Хромозавром Рексом ;)">';
echo '<br>' . $textarea; // '<br>' станавливает перевод строки в тексте (возврат каретки).

?>


