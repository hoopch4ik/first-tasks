<?php


$arr = [readline("Введите число: "), readline("Введите число: "), readline("Введите число: ")];
$ind = $arr[0];
$arif = $arr[1]-$arr[0];

foreach ($arr as $key=>$num) {
    $difference = $num-$ind+$arif;

    if ($num != $ind || $difference != $arif) {
        echo "Ошибка";
        exit;
    }


    $ind=$num+$arif;
}

echo "Успешно";