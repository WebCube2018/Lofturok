<?php

echo "<pre>";

#---------------------Задание №1---------------------#
echo "<h1>"."Задание 1"."</h1>";
echo "<br>";

$name = "Andrei";
$age = "25";

echo "Меня зовут: ". $name;
echo "<br>";
echo "Мне ". $age. " лет";
echo "<br>";
echo "\"!|\/'\"\\";

#---------------------Задание №2---------------------#
echo "<h1>"."Задание 2"."</h1>";
echo "<br>";

const ALL_PICTURES = 80;
const FELT_PEN = 23;
const PENCIL = 40;

$result = ALL_PICTURES - (FELT_PEN + PENCIL);

echo "Красками выполнено: ". $result. " рисунков";

#---------------------Задание №3---------------------#
echo "<h1>"."Задание 3"."</h1>";
echo "<br>";

$age = 34;
if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age >=1 && $age <= 17) {
    echo "Вам ещё рано работать";
} else {
    echo "Неизвестный возраст";
}

#---------------------Задание №4---------------------#
echo "<h1>"."Задание 4"."</h1>";
echo "<br>";

$day = mt_rand(0, 10);
switch (true) {
    case ($day >= 1 && $day <= 5):
        echo "Это рабочий день";
        break;
    case ($day >= 6 && $day <= 7):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}

#---------------------Задание №5---------------------#
echo "<h1>"."Задание 5"."</h1>";
echo "<br>";

$bmw = array(
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => 2015,
);

$bmw = array(
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => 2015,
);
$toyota = array(
    "model" => "Camry",
    "speed" => 239,
    "doors" => 4,
    "year" => 2018,
);
$opel = array(
    "model" => "Astra",
    "speed" => 190,
    "doors" => 3,
    "year" => 2014,
);

$car["bmw"] = $bmw;
$car["toyota"] = $toyota;
$car["opel"] = $opel;

foreach ($car as $key => $item) {
    echo "CAR: ".$key."<br>";
    echo $item["model"]." ".$item["speed"]." ".$item["doors"]." ".$item["year"]."<br>";
}

#---------------------Задание №6---------------------#
echo "<h1>"."Задание 6"."</h1>";
echo "<br>";

$table = '<table>';
for ($i = 1; $i <= 10; $i++) {
    $table .= '<tr>';
    for ($c = 1; $c <= 10; $c++) {
        if (($i % 2) == 0 && ($c % 2) == 0) {
            $result = "(".$i*$c.")";
        } elseif (($i % 2) != 0 && ($c % 2) != 0) {
            $result = "[".$i*$c."]";
        } else {
            $result = $i*$c;
        }
        $table .= '<td>'.$result.'</td>';
    }
    $table .= '</tr>';
}
$table .= '<table>';
echo $table;
