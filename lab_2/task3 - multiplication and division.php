<?php
$num_languages = 4;     // Ruby, Python, JavaScript, C++
$month = 11;    // количество месяцев, затраченных на обучение кодированию

$days = $month * 16;    // всё время в днях

$days_per_language = $days / $num_languages;
echo $days_per_language;

// 44