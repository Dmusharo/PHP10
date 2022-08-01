<?php
//Lesson 4. Task 39
// Практика условий  if-else
//1
$month= 3;
// Определить пору года.
if ($month>=0 and $month<=2 or $month===12){
    echo "Зима";
} elseif ($month>=3 and $month<=5){
    echo 'Весна';
} elseif ($month>=6 and $month<=8) {
    echo 'Лето';
}
  elseif ($month>=9 and $month<=11) {
      echo 'Осень';
  }
//2
$str='abcde';
if ($str[0]==='a'){
    echo "Да";
} else {
    echo "нет";
}
//3
$a=12345;
$b=(string)$a; //!!!!!!!!!!!
if ($b[0]==1 or $b[0]==2 or $b[0]==3){
    echo "Да число ".$b[0];
}
//4
$a=324;
$b=(string)$a;
//$c=(strlen($b)-1);
echo $b[0]+$b[1]+$b[2];

//5
$a=123456;
$b=(string)$a;
if (($b[0]+$b[1]+$b[2])==($b[3]+$b[4]+$b[5])) {
    echo "Yes";
} else {
    echo 'No';
}

?>


