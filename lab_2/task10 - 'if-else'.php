<?php
// Функция, проверяющая сумму двух чисел
function isSumGreaterThanTen($num1, $num2): int|float
{
    return ($num1 + $num2) > 10;
}
echo isSumGreaterThanTen(3, 8);

// Функция, проверяющая равенство двух чисел
function areNumbersEqual($num1, $num2)
{
    return $num1 === $num2;
}
echo areNumbersEqual(4, 4);

// Сокращенная форма условия
$test = 0;
echo ($test == 0) ? 'верно' : '';

// Проверка числа и суммы его цифр
$age = 45;
if ($age < 10 || $age > 99) {
    echo "Число меньше 10 или больше 99\n";
} else {
    $sum = array_sum(str_split((string)$age));
    if ($sum <= 9) {
        echo "Сумма цифр однозначна\n";
    } else {
        echo "Сумма цифр двузначна\n";
    }
}

// Проверка количества элементов в массиве и сумма элементов
$arr = [1, 2, 3]; // Пример массива
if (count($arr) == 3) {
    echo "Сумма элементов массива: " . array_sum($arr) . "\n";
}
