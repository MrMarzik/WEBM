<?php
//Часть 1
//№1
function n1(){
$a = 3;
$b = $a;
return ($b);
}
echo (n1());

//№2
function n2(){
    $a=10;
    $b=2;
    $sum=($a+$b)/2;
    $raz=($a+$b)/2;
    $pro=($a+$b)/2;
    $cha=($a+$b)/2;
    return
}

echo n2();

//№3

function n3(){
    $c=15;
    $d=2;
    $result=$c+$d;
    return $result;
}

echo n3();

//№4

function n4(){
    $a=10;
    $b=2;
    $c=5;
    $average = ($a+$b+$c)/(($a+$b+$c)/3);
    return $average;
}

echo n4();

//№5

function n5(){
    $a=17;
    $b=10;
    $c=$a-$b;
    $d=17;
    $result=$c+$d;
    return $result;
}

echo n5();

//Часть 2
//№1

function c2n1(){
    $text = 'Привет, Мир!';
    return $text;
}

echo (c2n1()+'Моя первая программа!');

//№2

function c2n2(){
    $text1='Привет, ';
    $text2='Мир!';
    return ($text1+$text2);
}

echo c2n2();

//№3

function c2n3(){
    $name='Денис';
    $text='Привет, '+$name;
    return $text;
}

echo c2n3();

//№4

function c2n4(){
    $age='19';
    $height='173';
    $text='Мой возраст: '+$age+'| Мой рост: '+$height;
    return $text;
}

echo c2n4();

//№5

function c2n5(){
    $text='abcde';
    return ($text[0]+$text[2]+$text[4]);
}

echo c2n5();

//Часть 3
//№1

function c3n1(){
    $arr=['a','b','c'];
    return $arr;
}

echo var_dump(c3n1());
echo c3n1()[0];