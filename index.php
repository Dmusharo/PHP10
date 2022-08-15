<meta charset="utf-8">
<?php
//1
$str="minsk";
echo strtoupper('minsk')."<br>";

//2
$str="минск";
echo mb_strtoupper($str)."<br>";

//3
$str="MINSK";
echo ucfirst(strtolower("$str"))."<br>";
//4
$date="31-12-2030";
$arr=explode("-",$date); //Разбитие строки в массив по едементу -
echo $arr[2].' '.$arr[1]." ".$arr[0]."<br>";
//5.1 Дана строка 'php'. Сделайте из нее строку 'PHP'.
$str="php";
echo strtoupper($str)."<br>";
//5.2  Дана строка 'PHP'. Сделайте из нее строку 'php'.
$str="PHP";
echo strtolower($str)."<br>";
//5.3 Дана строка 'london'. Сделайте из нее строку 'London'.
$str="london";
echo ucfirst($str)."<br>";
//5.4  Дана строка 'London'. Сделайте из нее строку 'london'.
$str="London";
echo lcfirst($str)."<br>";
//5.5 Дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'.
$str="london is the capital of great britain";
echo ucwords($str)."<br>";
//5.6  Дана строка 'LONDON'. Сделайте из нее строку 'London'.
$str="LONDON";
echo ucfirst(strtolower($str))."<br>";
//5.7  Дана строка 'html css php'. Найдите количество символов в этой строке
$str="html css php";
echo strlen($str)."<br>";
//5.8  Дана переменная $password, в которой хранится пароль пользователя. Если количество символов пароля больше 5-ти и меньше 10-ти, то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.
$password="12345678910";
$password=strlen($password);
if ($password>5 and $password<10){
    echo "Пароль подходит"."<br>";
} else {
    echo "Придумайте дургой пароль"."<br>";
}
//5.9 Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
$str="html css php";
echo substr($str,0,5).substr($str,5,3). substr($str,-4)."<br>";
//5.10  Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.
echo  substr($str,-3)."<br>";
//5.11  Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.
$str= 'qhttp://';
if (strpos($str,'http://')===0) {
    echo "Да"."<br>";
}else{
    echo "Нет"."<br>";
}
//5.12  Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'.
$str= 'https://';
if ($str==='http://' or $str==='https://' ) {
    echo "Да"."<br>";
}else{
    echo "Нет"."<br>";
}
//5.13 Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'
$str=".png1";
if ($str==='.png') {
    echo "Да"."<br>";
}else{
    echo "Нет"."<br>";
}
//5.14  Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'.
$str=".jpg";
if ($str==='.png' or $str===".jpg") {
    echo "Да"."<br>";
}else{
    echo "Нет"."<br>";
}
//5.15  Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.
$str="123";
if (strlen($str)>5) {
    echo substr($str,0,5)."..."."<br>";
} if (strlen($str)<5) {
    echo $str."<br>";
}
//5.16  Дана строка '31.12.2013'. Замените все точки на дефисы.
$str="31.12.2013";
echo str_replace(".","-",$str)."<br>";
//5.17   Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
$str="abcdea";
echo   str_replace("c","3",(str_replace("b","2",(str_replace("a","1",$str)))) )."<br>";
//5.18  Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'
$str="1a2b31c4b5d6e7f8g9h011";
$str1="";
for ($i=0;$i<10;$i++){
    $str1= str_replace("$i" ,"",$str);
    $str=$str1;
}  echo $str1."<br>";
//5.19  Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).
$str="abcdefg";
echo strtr("$str",["a"=>"1","b"=>"2","c"=>3])."<br>";
echo strtr("$str","abc","123")."<br>";
//5.20  Дана строка $str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.
$str="123456789101112131415161718";
echo substr_replace("$str","!!!","3","5")."<br>";
//5.21  Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.
$str="abc abc abc";
echo strpos($str,"b")."<br>";
//5.22   Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
echo strrpos($str,"b")."<br>";
//5.23 Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать поиск не с начала строки, а с позиции 3.
echo strpos($str,"b","3")."<br>";
//5.24 Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.
echo strpos($str," ","4")."<br>";
//5.25  Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.
$str="fsjdg..jsldgsdlkfdfd";
if (strpos($str,"..")>1) {
    echo "Да"."<br>";
}else{
    echo "Нет"."<br>";
}
//5.26 Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.
$str="http://dfdshttp://dfds";
$str=strpos($str,"http://");
if ($str===0) {
    echo "Да"."<br>";
}else{
    echo "Нет"."<br>";
}
//5.27  Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
$str="html css php";
$arr=explode(" ",$str);
var_dump($arr)."<br>";
echo "<br>";
//5.28 Дан массив с элементами 'html', 'css', 'php'. С помощью функции implode создайте строку из этих элементов, разделенных запятыми.
$str=implode(",",$arr);
echo $str."<br>";
//5.29   В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'.
$date='2013-12-31';
$arr=explode("-", $date);
echo implode(".", [$arr[2],$arr[1],$arr[0]])."<br>";


//Работа с str_split
//5.30  Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.
$str="1234567890";
var_dump(str_split($str,2))."<br>";
//5.31 Дана строка '1234567890'. Разбейте ее на массив с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.
var_dump(str_split($str,1))."<br>";
//5.32  Дана строка '1234567890'. Сделайте из нее строку '12-34-56-78-90' не используя цикл.
$str="1234567890";
$arr=(str_split($str,2));
echo '<br>'.implode("-",$arr)."<br>";

//Работа с trim, ltrim, rtrim

//5.33  Дана строка. Очистите ее от концевых пробело
$str=' 1234567890 ';
echo (trim($str))."<br>";
//5.34  Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.
$str="/php/";
echo (trim($str,'/'))."<br>";
//5.35
/*
 *  Дана строка 'слова слова слова.'. В конце этой строки может быть точка, а может и не быть.
 *  Сделайте так, чтобы в конце этой строки гарантировано стояла точка.
 * То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать.
 * Задачу решите через rtrim без всяких ифов.
 */
$str='слова слова слова.';
$str1=strlen($str)-1;
if ($str[$str1]==="."){
    echo $str."<br>";
} else {
    echo $str."."."<br>";
}

$str='слова слова слова';
$str=rtrim($str,".");
echo $str."."."<br>";

//Работа с strrev

//5.36  Дана строка '12345'. Сделайте из нее строку '54321'.
$str="12345";
echo strrev($str)."<br>";

//5.37 Проверьте, является ли слово палиндромом (одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).

$str="level";

if(strrev($str)==$str){
    echo "Da"."<br>";
}


//Работа с str_shuffle

//5.38 Дана строка. Перемешайте символы этой строки в случайном порядке.
$str="madam, otto, kayak, nun, level";
echo str_shuffle($str)."<br>";

//5.39 Создайте строку из 6-ти случайных маленьких латинских букв так,
// чтобы буквы не повторялись. Нужно сделать так, чтобы в нашей строке могла
// быть любая латинская буква, а не ограниченный набор.
$str="abcdefghiklmnopqrstvxyz";
echo substr(str_shuffle($str),0,6) ."<br>";

//Работа с number_format
//5.40  Дана строка '12345678'. Сделайте из нее строку '12 345 678'.
$str="12345678";
echo number_format($str,0,"0"," ")."<br>";

//Работа с str_repeat
//5.41 Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов,
// а не 5. Решите задачу с помощью одного цикла и функции str_repeat.
for($i=0;$i<=10;$i++){
    echo str_repeat("x",$i)."<br>";
}

// 5.42  Нарисуйте пирамиду, как показано на рисунке. Решите задачу с помощью одного цикла и функции str_repeat.

for($i=0;$i<9;++$i) {
    echo str_repeat($i+1, $i+1) . "<br>";
}

// Работа с strip_tags и htmlspecialchars
//5.43 Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.
$str="html, <b>php</b>, js";
echo strip_tags($str)."<br>";

//5.44 Дана строка $str. Удалите все теги из этой строки, кроме тегов <b> и <i>.
$str="html, <b>php</b>, <i>js</i>";
echo strip_tags($str,"<b></b><i></i>")."<br>";
//5.45  Дана строка 'html, <b>php</b>, js'.
// Выведите ее на экран 'как есть': то есть браузер не должен преобразовать <b> в жирный.
$str='html, <b>php</b>, js';
echo htmlspecialchars($str)."<br>";

//Работа с chr и ord
//5.46   Узнайте код символов 'a', 'b', 'c', пробела.
echo ord("a")." ".ord("b")." ".ord("c")." ".ord(" ")."<br>";
//5.48  Выведите на экран символ с кодом 33.
echo chr(33)."<br>";
//5.49
echo chr(mt_rand(65,90))."<br>";


?>

