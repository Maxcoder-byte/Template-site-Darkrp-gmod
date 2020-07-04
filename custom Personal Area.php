<?php

include 'bd.php'; //include php file on bd connection // подключение файла php для бд 


$gameid = $_POST['gameid'] // Ваше значение // your variable
$money = $_POST['money'] // Переменная для денег // varible on money
$fullname = $_POST['gamename'] // Имя в стиме | В гарисмоде // name on steam and Garrys Mod


echo "Ваше количество денег" . $money; //Пишет количество денег //money
echo "Ваше имя " . $fullname; //Steam name 







?>