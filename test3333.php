<?php

$login = $_REQUEST["login"];
$password = $_REQUEST["password"];
$sel = $_REQUEST["sel"];

echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";



if (empty($login) || empty($password) || empty($sel)) {
    require 'test2222.php';
    echo "Заполните все поля";
} else {

    echo "Имя пользователя:" . " " . $login . "<br>";
    echo "Пароль:" . " " . $password . "<br>";
    echo "Список:";
    foreach ($sel as $k => $v) {
        //echo "Список:" . " " . $v;
        echo $v . ",";
    }
    echo "<br>";
}
echo "<br>";



$date = date("d m Y");
$time = date("h:i:s");

echo "Текущая дата " . $date . "<br>";
echo "Текущее время " . $time . "<br>";
echo "<br>";


echo "<ul>";
for ($q = 1; $q <= 5; $q++) {
    echo "<li>" . $q . " в квадрате = " . ($q * $q) . "<br>";
    echo "<li>" . $q . " в кубе = " . ($q * $q * $q) . "<br>" . "<br>";
}

for ($m = 1; $m <= 3; $m++) {
    echo "<br>";
}


$l = array('lexa', 'sana', 'peta', 'gena');

$x = 8;

switch ($x) {
    case 1:
        echo "сегодня понедельник";
        break;
    case 2:
        echo "вторник";
        break;
    case 3:
        echo "среда";
        break;
    case 4:
        echo "четверг";
        break;
    case 5:
        echo "пятница";
        break;
    case 6:
        echo "субота";
        break;
    case 7:
        echo "воскресенье";
        break;
    default:
        echo "нет такого дня";
}

echo "<br>";
echo "<br>";
echo "<br>";

echo "<pre>";
$v = array('22', '44', '55', 'ee', '1ee');
$h = array(
    array('q', 'w', 'e', 'r'),
    array('a', 's', 'd', 'f'),
    array('z', 'x', 'c', 'v')
);


var_dump($v);
echo "<br>";
var_dump($h);
echo "<br>";
echo count($h)." , ". count($h[0]);
echo "<br>";

for ($i = 0; $i < count($v); $i++) {
    echo $v[$i] . "<br>";
}
echo "<br>";
echo "<br>";
foreach ($v as $k => $z) {
    echo $k . "=>" . $z . "<br>";
}
echo "<br>";
for($i = 0; $i < count($h); $i++){
    echo $h[$i]."<br>";
    for($q = 0; $q < count($h[$q]); $q++){
    echo $q;
    }



echo "</pre>";
