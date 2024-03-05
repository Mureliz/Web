<?php
$my_num = 12345;
$answer = $my_num;

$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;

$answer -= $my_num;
echo 'result: ', $answer, "\n";
