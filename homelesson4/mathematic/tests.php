<?php
require_once 'mathematics.php';
function test()
{
	echo 'Автоматические тесты'.PHP_EOL;
	$arr1 = [1, 2, 3, 4];
	echo 'Первая последовательность 1, 2, 3, 4'.PHP_EOL;
	echo 'Ожидаем: 1'.PHP_EOL;
	echo 'Получаем: '.countingMaxNumbers($arr1).PHP_EOL;
	$arr2 = [1, 2, 3, 4, 5, 5];
	echo 'Вторая последовательность 1, 2, 3, 4, 5, 5'.PHP_EOL;
	echo 'Ожидаем: 2'.PHP_EOL;
	echo 'Получаем: '.countingMaxNumbers($arr2).PHP_EOL;
	$arr3 = [1, 1, 1, 1, 3, 3, 3, 4, 5, 5];
	echo 'Вторая последовательность 1, 1, 1, 1, 3, 3, 3, 4, 5, 5'.PHP_EOL;
	echo 'Ожидаем: 2'.PHP_EOL;
	echo 'Получаем: '.countingMaxNumbers($arr2).PHP_EOL;
}
