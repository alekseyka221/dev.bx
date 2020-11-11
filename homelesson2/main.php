<?php
require_once 'automaticTests.php';
require_once 'usersTests.php';
require_once 'readFromConsole.php';

perfomAutomaticTests();

echo PHP_EOL.'Хотители провести личные тесты?'.PHP_EOL.'Введите y/n'.PHP_EOL;
$userChoice = readFromConsole();
while($userChoice == 'y')
{
	perfomUsersTests();
	echo 'Хотите провести тест еще?'.PHP_EOL.'Введите y/n'.PHP_EOL;
	$userChoice = readFromConsole();
}

exit(1);