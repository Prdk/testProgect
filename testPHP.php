<?php
header("Content-Type: text/html; charset=utf-8");

$time = date("H : m : s");
$date = date("d. m. Y");

echo " Текущее время: " .$time. "<br>";
echo " Текущая дата: " .$date. "<br>";
for ($i = 1; $i < 3; $i++) {
    echo "<br>";
}

//$name = $_REQUEST["name"];
//$password = $_REQUEST["password"];

$login = array("леха", "вася", "петя", "саня", "коля", "женя", "костя");


echo "<br>";

if(!empty($name) && !empty($password)){
    
    echo "Вход разрешен";
}elseif (empty ($name)) {
    echo "Введите имя";
    require 'testHtml.html';
}elseif (empty ($password)) {
    echo "Введите пароль";
    require 'testHtml.html';
}

echo "<br>";
echo "<br>";

 

echo "<br>";
echo "<br>";
$select = $_REQUEST['qqq'];
echo print_r($_REQUEST);

