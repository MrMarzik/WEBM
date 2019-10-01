<?php

//Часть 1
//№1
$a = 3;
$b = $a;
echo ($b);
echo "<br>";

//№2
$a=10;
$b=2;
$sum=($a+$b)/(($a+$b)/2);
$raz=($a+$b)/(($a+$b)/2);
$pro=($a+$b)/(($a+$b)/2);
$cha=($a+$b)/(($a+$b)/2);

echo ($sum+$raz+$pro+$cha);
echo "<br>";

//№3

$c=15;
$d=2;
$result=$c+$d;
echo $result;
echo "<br>";

//№4

$a=10;
$b=2;
$c=5;
$average = ($a+$b+$c)/(($a+$b+$c)/3);
echo $average;
echo "<br>";

//№5

$a=17;
$b=10;
$c=$a-$b;
$d=17;
$result=$c+$d;
echo $result;
echo "<br>";

//Часть 2
//№1

$text = 'Привет, Мир!';
echo ($text+'Моя первая программа!');
echo "<br>";
//№2

$text1='Привет, ';
$text2='Мир!';
echo ($text1+$text2);
echo "<br>";
//№3

$name='Денис';
$text='Привет, '+$name;
echo $text;
echo "<br>";
//№4

$age='19';
$height='173';
$text='Мой возраст: '+$age+'| Мой рост: '+$height;
echo $text;
echo "<br>";
//№5

$text='abcde';
echo ($text[0]+$text[2]+$text[4]);
echo "<br>";
//Часть 3
//№1

$arr=['a','b','c'];

echo var_dump($arr());
echo $arr[0];
echo $arr[1];
echo $arr[2];
echo "<br>";
//№2

$arr=['a','b','c'];
echo ($arr[0]+$arr[1]+$arr[2]);
echo "<br>";
//№3

$arr=['a','b','c','d'];
echo ($arr[0]+'+'+$arr[1]+','+$arr[2]+'+'+$arr[3]+','+$arr[0]+'-'+$arr[3]+','+$arr[0]+'/'+$arr[3]);
echo "<br>";
//№4

$arr=[2,5,3,9];
$result=($arr[0]*$arr[1])+($arr[2]*$arr[3]);
echo $result;
echo "<br>";
//№5

$arr[]=1;
$arr[]=2;
$arr[]=3;
$arr[]=4;
$arr[]=5;

//Часть 4
//№1

$arr=['a'=>11, 'b'=>20, 'c'=>30];
echo $arr[c];
echo "<br>";
//№2

$arr=['q3'=>12, 'r3'=>23, 'f3'=>34];
echo array_sum($arr);
echo "<br>";
//№3

$arr=['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo $arr[Петя]+$arr[Коля];
echo "<br>";
//№4

$arr=['1'=>'Январь','2'=>'Февраль','3'=>'Март','4'=>'Апрель',
    '5'=>'Май','6'=>'Июнь','7'=>'Июль','8'=>'Август',
    '9'=>'Сентябрь','10'=>'Октябрь','11'=>'Ноябрь','12'=>'Декабрь'];
echo ($arr[9]+','+$arr[7]);
echo "<br>";
//№5

$day=3;
$arr=['1'=>'Понедельник','2'=>'Вторник','3'=>'Среда',
    '4'=>'Четверг','5'=>'Пятница','6'=>'Суббота','7'=>'Воскресенье'];
echo $arr[$day];