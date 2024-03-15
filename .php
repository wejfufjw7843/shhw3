<?php
// Создаем пустой массив
$numbers = [];

// Добавляем пять разных чисел в массив
$numbers[] = 10;
$numbers[] = 20;
$numbers[] = 30;
$numbers[] = 40;
$numbers[] = 50;
// Выводим массив с использованием цикла for
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}
?>