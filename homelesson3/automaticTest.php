<?php
/*
 * ВНИМАНИЕ. в моем тесте присутствует файл без прав доступа на чтение fileTest(noReadable).
 *  Я его не смог запушить на gitHub, поэтому тесты с ним закомментированны
 */
require_once 'getDirectoryStatus.php';
function test()
{
    $result = getDirectoryStatus('./test/');
    //print_r($result);

    echo 'Запуск автоматического тестирования' . PHP_EOL;

    $expectedResult = [
    	'dirs' => [
			'0' =>
			[
				'is_readable' => 'true',
				'is_writable' => 'true'
			]
		],
		'files' => [
			'testFile(inTest).php' => [
				'is_readable' => 'true',
				'is_writeable' => 'true',
				'filesize' => 17
			],
			'testFile(noWritable)' => [
				'is_readable' => 'true',
				'is_writeable' => 'false',
				'filesize' => 2
			]
		]
	];
	var_export($result == $expectedResult);



    /*echo 'Название директории: 0' . PHP_EOL;
    echo 'Проверка на директорию' . PHP_EOL;
    echo 'Ожидание:' . 'is directory' . PHP_EOL;
    echo 'Реальность: ' . $result['dirs']['0'][0] . PHP_EOL;
    echo ($result['dirs']['0'][0] === 'is directory' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на читаемость:' . PHP_EOL;
    echo 'Ожидание: ' . 'is readable: true' . PHP_EOL;
    echo 'Реальность: ' . $result['dirs']['0'][1].PHP_EOL;
    echo ($result['dirs']['0'][1] === 'is readable: true' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на изменяемость: ' . PHP_EOL;
    echo 'Ожидание: ' . 'is writable: true' . PHP_EOL;
    echo 'Реальность: ' . $result['dirs']['0'][2] . PHP_EOL;
    echo ($result['dirs']['0'][2] === 'is writable: true' ? 'passed' : 'failed') . PHP_EOL;
    echo '----------';
    echo PHP_EOL;

    echo 'ПРОВЕРКА ФАЙЛОВ' . PHP_EOL;

    echo 'Название файла: testFile(noWritable)'.PHP_EOL;
    echo 'Проверка на файл'.PHP_EOL;
    echo 'Ожидание: ' . 'is file' . PHP_EOL;
    echo 'Реальность: '. $result['files']['testFile(noWritable)'][0].PHP_EOL;
    echo ($result['files']['testFile(noWritable)'][0] === 'is file' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на читаемость: ' . PHP_EOL;
    echo 'Ожидание: ' . 'is readable: true' . PHP_EOL;
    echo 'Реальность: '. $result['files']['testFile(noWritable)'][1].PHP_EOL;
    echo ($result['files']['testFile(noWritable)'][1] === 'is readable: true' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на изменяемость: ' . PHP_EOL;
    echo 'Ожидание: ' . 'is writable: false' . PHP_EOL;
    echo 'Реальность: '. $result['files']['testFile(noWritable)'][2] . PHP_EOL;
    echo ($result['files']['testFile(noWritable)'][2] === 'is writable: false' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Размер файла:' . PHP_EOL;
    echo 'Ожидание: ' . '2' . PHP_EOL;
    echo 'Реальность: '. $result['files']['testFile(noWritable)'][3] . PHP_EOL;
    echo ($result['files']['testFile(noWritable)'][3] === 2 ? 'passed' : 'failed') . PHP_EOL;

    echo '----------';
    echo PHP_EOL;

    echo 'Название файла: testFile(inTest).php' . PHP_EOL;
    echo 'Проверка на файл' . PHP_EOL;
    echo 'Ожидание: ' . 'is file' . PHP_EOL;
    echo 'Реальность: ' . $result['files']['testFile(inTest).php'][0] . PHP_EOL;
    echo ($result['files']['testFile(inTest).php'][0] === 'is file' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на читаемость: ' . PHP_EOL;
    echo 'Ожидание: ' . 'is readable: true' . PHP_EOL;
    echo 'Реальность: '. $result['files']['testFile(inTest).php'][1].PHP_EOL;
    echo ($result['files']['testFile(inTest).php'][1] === 'is readable: true' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на изменяемость:' . PHP_EOL;
    echo 'Ожидание: ' . 'is writable: true' . PHP_EOL;
    echo 'Реальность: ' . $result['files']['testFile(inTest).php'][2] . PHP_EOL;
    echo ($result['files']['testFile(inTest).php'][2] === 'is writable: true' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Размер файла:' . PHP_EOL;
    echo 'Ожидание: ' . '17' . PHP_EOL;
    echo 'Реальность: '. $result['files']['testFile(inTest).php'][3] . PHP_EOL;
    echo ($result['files']['testFile(inTest).php'][3] === 17 ? 'passed' : 'failed') . PHP_EOL;

    echo '----------';
    echo PHP_EOL;
/*
    echo 'Название файла: testFile(noReadable)' . PHP_EOL;
    echo 'Проверка на файл' . PHP_EOL;
    echo 'Ожидание: ' . 'is file' . PHP_EOL;
    echo 'Реальность: ' . $result['files']['testFile(noReadable)'][0].PHP_EOL;
    echo ($result['files']['testFile(noReadable)'][0] === 'is file' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на читаемость:' . PHP_EOL;
    echo 'Ожидание: ' . 'is readable: false' . PHP_EOL;
    echo 'Реальность: ' . $result['files']['testFile(noReadable)'][1].PHP_EOL;
    echo ($result['files']['testFile(noReadable)'][1] === 'is readable: false' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на изменяемость:' . PHP_EOL;
    echo 'Ожидание: ' . 'if writable: true' . PHP_EOL;
    echo 'Реальность: ' . $result['files']['testFile(noReadable)'][2].PHP_EOL;
    echo ($result['files']['testFile(noReadable)'][2] === 'is writable: true' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Размер файла:' . PHP_EOL;
    echo 'Ожидание: ' . '2' . PHP_EOL;
    echo 'Реальность: '. $result['files']['testFile(noReadable)'][3] . PHP_EOL;
    echo ($result['files']['testFile(noReadable)'][3] === 2 ? 'passed' : 'failed') . PHP_EOL;

    echo '----------';
    echo PHP_EOL;
*/
}