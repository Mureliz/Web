<?php
$regularExp1 = '/a..b/';
$str1 = 'ahb acb aeb aeeb adcb axeb';

preg_match_all($regularExp1, $str1, $matches);
echo 'Part a: ';
print_r($matches);
echo "\n\n";


function cube(array $matches): int
{
    $digit = (int)$matches[0];
    return (string)pow($digit, 3);
}

$regularExp2 = '/\d/';
$str2 = 'a1b2c3f5';
$result = preg_replace_callback($regularExp2, 'cube', $str2);

echo 'Part b: ', $result;