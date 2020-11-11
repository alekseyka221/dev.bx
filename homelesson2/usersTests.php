<?php
require_once 'readFromConsole.php';

function perfomUsersTests()
{
	echo 'Введите данные для проверки: '.PHP_EOL;
	$result = readFromConsole();

	echo 'Ожидаемый результат: '.PHP_EOL;
	$expectation = trim(fgets(STDIN));

	if ($result === $expectation)
	{
		echo 'test passed'.PHP_EOL;
	}
	else
	{
		echo 'test failed'.PHP_EOL;
	}
}
