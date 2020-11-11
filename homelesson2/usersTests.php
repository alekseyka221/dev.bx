<?php
require_once 'readFromConsole.php';

function perfomUsersTests()
{
	echo 'Введите данные для проверки: '.PHP_EOL;
	$result = readFromConsole();

	echo 'Ожидаемый результат: '.PHP_EOL;
	$expectation = trim(fgets(STDIN));
	switch ($expectation)
	{
		case is_numeric($expectation):
			$expectation = +$expectation;
			break;
		case 'true':
			$expectation = true;
			break;
		case 'false':
			$expectation = false;
			break;
		default:
			$expectation = (string)$expectation;
			break;
	}

	if ($result == $expectation)
	{
		echo 'test passed'.PHP_EOL;
	}
	else
	{
		echo 'test failed'.PHP_EOL;
	}
}
