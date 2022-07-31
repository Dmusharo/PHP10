<?php
//Lesson 4. Task 35
//   Команда empty
//  это 0  "0" false null
//1
$test=0;
if (empty($test)) {
    echo '+'; //выведет +
} else {
    echo '-';
}
//2
$test=-1;
if (empty($test)) {
    echo '+';
} else {
    echo '-';//выведет -
}
//3
$test='';
if (!empty($test)) {
    echo '+';
} else {
    echo '-';//выведет -
}
//4
$test=-1;
if (!empty($test)) {
    echo '+'; //выведет +
} else {
    echo '-';
}
//5
$test="0";
if (!empty($test)) {
    echo '+';
} else {
    echo '-';//выведет -
}

//6
$test=-1;
if (!empty($test)) {
    echo '+';//выведет +
} else {
    echo '-';
}
//7
$test=null;
if (empty($test)) {
    echo '+';//выведет +
} else {
    echo '-';
}
//8
$test=false;
if (!empty($test)) {
    echo '+';
} else {
    echo '-';//выведет -
}
//9
$test=true;
if (!empty($test)) {
    echo '+';//выведет +
} else {
    echo '-';
}
//10
$test=false;
if (!empty($test)) {
    echo '+';
} else {
    echo '-';//выведет -
}
//11
$test=null;
if (!empty($test)) {
    echo '+';
} else {
    echo '-';//выведет -
}
//12
$test=0;
if (isset($test)) {
    echo '+';//выведет +
} else {
    echo '-';
}
//13
$test=null;
if (isset($test)) {
    echo '+';//выведет -
} else {
    echo '-';
}
//14
$test=false;
if (isset($test)) {
    echo '+';//выведет +
} else {
    echo '-';
}
?>


