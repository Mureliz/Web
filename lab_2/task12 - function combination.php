<?php
// Найдите среднее арифметическое элементов массива чисел не используя цикл
$numbers = [1, 2, 3, 4, 5]; // Пример массива
$average = array_sum($numbers) / count($numbers);
echo "Среднее арифметическое: $average\n";

// Найдите сумму чисел от 1 до 100 не используя цикл
$sum = array_sum(range(1, 100));
echo "Сумма чисел от 1 до 100: $sum\n";

// Получите из массива чисел массив с квадратными корнями этих чисел не используя цикл
$numbers = [1, 4, 9, 16, 25]; // Пример массива
$squareRoots = array_map('sqrt', $numbers);
print_r($squareRoots);

// Заполните массив числами от 1 до 26 так, чтобы ключами этих чисел были буквы английского алфавита
$letters = range('a', 'z');
$numbers = range(1, 26);
$array = array_combine($letters, $numbers);
print_r($array);

// Найдите сумму пар чисел в строке '1234567890' не используя цикл
$numbers = '1234567890';
$pairs = str_split($numbers, 2);
$sumOfPairs = array_sum($pairs);
echo "Сумма пар чисел: $sumOfPairs\n";
