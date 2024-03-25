<?php
function increaseEnthusiasm($string): string
{
    return $string . "!";
}
echo increaseEnthusiasm("String") . "\n";

function repeatThreeTimes($string): string
{
    return $string . $string . $string;
}
echo repeatThreeTimes("Mini") . "\n";

echo increaseEnthusiasm(repeatThreeTimes("Hello")) . "\n";

function cut($string, $length = 10): string
{
    return substr($string, 0, $length);
}

echo cut("Hello, world!") . "\n";

function printArrayRecursively(array $array): void {
    if(empty($array)) {
        return;
    }

    echo array_shift($array) . "\n";
    printArrayRecursively($array);
}
printArrayRecursively([1, 2, 3, 10]);

function sumDigitsToOneDigit(int $number): int {
    while ($number > 9) {
        $number = array_sum(str_split((string) $number));
    }
    return $number;
}
echo sumDigitsToOneDigit(12345) . "\n";
