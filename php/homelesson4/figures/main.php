<?php
require_once 'tests.php';
require_once 'figures.php';
test();


echo 'Хотите провести собственные тесты?(y/n)'.PHP_EOL;
$answer = trim(fgets(STDIN));
if($answer == 'y')
{
	echo 'Укажите через пробел начальную позицию и проверяемую позицию'.PHP_EOL;
	$string = trim(fgets(STDIN));
	$positions =explode(" ", $string);
	$rook = new AlexShah\Rook($positions[0], $positions[1]);
	$queen = new AlexShah\Queen($positions[0], $positions[1]);
	echo 'Ладья '.($rook->checkAttack($positions[2], $positions[3]) == 'ДА' ? '' : 'не '). 'сможет попасть'.PHP_EOL;
	echo 'Ферзь '.($queen->checkAttack($positions[2], $positions[3]) == 'ДА' ? '' : 'не '). 'сможет попасть'.PHP_EOL;
}
