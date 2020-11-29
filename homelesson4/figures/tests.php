<?php
require_once 'figures.php';
function test()
{
	echo 'Проверка Ладьи'.PHP_EOL;
	echo 'Начальная позиция = (2, 2)'.PHP_EOL;
	$rook = new AlexShah\Rook(2, 2);
	echo 'Можно ли попасть в клетку (6, 2)?'.PHP_EOL;
	echo 'Ожидаем: ДА'.PHP_EOL;
	echo 'Получаем: '.$rook->checkAttack(6,2).PHP_EOL;
	echo '-----------------------'.PHP_EOL;
	echo 'Начальная позиция = (2, 2)'.PHP_EOL;
	echo 'Можно ли попасть в клетку (2, 6)?'.PHP_EOL;
	echo 'Ожидаем: ДА'.PHP_EOL;
	echo 'Получаем: '.$rook->checkAttack(2,6).PHP_EOL;
	echo '-----------------------'.PHP_EOL;
	echo 'Начальная позиция = (2, 2)'.PHP_EOL;
	echo 'Можно ли попасть в клетку (6, 6)?'.PHP_EOL;
	echo 'Ожидаем: НЕТ'.PHP_EOL;
	echo 'Получаем: '.$rook->checkAttack(6,6).PHP_EOL;
	echo '-----------------------'.PHP_EOL.PHP_EOL;

	echo 'Проверка Ферзя'.PHP_EOL;
	echo 'Начальная позиция = (2, 2)'.PHP_EOL;
	$queen = new AlexShah\Queen(2, 2);
	echo 'Можно ли попасть в клетку (6, 2)?'.PHP_EOL;
	echo 'Ожидаем: ДА'.PHP_EOL;
	echo 'Получаем: '.$queen->checkAttack(6,2).PHP_EOL;
	echo '-----------------------'.PHP_EOL;
	echo 'Начальная позиция = (2, 2)'.PHP_EOL;
	echo 'Можно ли попасть в клетку (2, 6)?'.PHP_EOL;
	echo 'Ожидаем: ДА'.PHP_EOL;
	echo 'Получаем: '.$queen->checkAttack(2,6).PHP_EOL;
	echo '-----------------------'.PHP_EOL;
	echo 'Начальная позиция = (2, 2)'.PHP_EOL;
	echo 'Можно ли попасть в клетку (6, 6)?'.PHP_EOL;
	echo 'Ожидаем: ДА'.PHP_EOL;
	echo 'Получаем: '.$queen->checkAttack(6,6).PHP_EOL;
	echo '-----------------------'.PHP_EOL;
	echo 'Начальная позиция = (2, 2)'.PHP_EOL;
	echo 'Можно ли попасть в клетку (3, 5)?'.PHP_EOL;
	echo 'Ожидаем: НЕТ'.PHP_EOL;
	echo 'Получаем: '.$queen->checkAttack(3,5).PHP_EOL;
}
