<?php
$d=$_POST['day'];
$y=$_POST['year'];
$m=$_POST['month'];
$arrayWeekDay=["0","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
$day=date('w',mktime(0,0,0,"$m","$d","$y")) ;
echo "Твой первый день рождения был в ".$arrayWeekDay[$day];
?>