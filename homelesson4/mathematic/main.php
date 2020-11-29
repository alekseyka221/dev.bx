<?php
require_once 'mathematics.php';
require_once 'tests.php';

test();

echo 'Хотите провести собственные тесты?(y/n)'.PHP_EOL;
$answer = trim(fgets(STDIN));
if($answer == 'y')
{
	echo 'Введите последовательность чисел через пробел'.PHP_EOL;
	$string = trim(fgets(STDIN));
	$arr = explode(" ", $string);
	echo countingMaxNumbers($arr);
}
