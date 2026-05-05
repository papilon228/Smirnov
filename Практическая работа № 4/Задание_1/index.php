<?php
// Функция для реализации XOR трех переменных function xorThree($a, $b, $c) {
    // Проверка всех возможных комбинаций через if else
    
    function xorThree($a, $b, $c) {
    if ($a == 0 && $b == 0 && $c == 0) {
        return 0;
    } elseif($a ==0 && $b == 0 && $c == 1) {
        return 1;
    }elseif($a == 0 && $b == 1 && $c == 0){
        return 1;
    }elseif($a == 0 && $b == 1 && $c == 1){
        return 0;
    }elseif($a == 1 && $b == 0 && $c == 0){
        return 1;
    }elseif($a == 1 && $b == 0 && $c == 1){
        return 0;
    }elseif($a == 1 && $b == 1 && $c == 0){
        return 0;
    }elseif($a == 1 && $b == 1 && $c == 1){
        return 1;
    }

    }

$a = 0;
$b = 1;
$c = 1;
$result = xorThree($a, $b, $c);
echo "Если a=$a, b=$b, c=$c, то q=" . $result;
?>