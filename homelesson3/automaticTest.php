<?php
/*
 * ВНИМАНИЕ. в моем тесте присутствует файл без прав доступа на чтение fileTest(noReadable).
 *  Я его не смог запушить на gitHub, поэтому тесты с ним закомментированны
 */
require_once 'getDirectoryStatus.php';
function test()
{
    $testing = getDirectoryStatus('./test/');
    //print_r($testing);
    echo 'Проверка директорий' . PHP_EOL;

    echo 'Название директории: 0' . PHP_EOL;
    echo 'Проверка на директорию' . PHP_EOL;
    echo 'Ожидание:' . 'is directory' . PHP_EOL;
    echo 'Реальность: ' . $testing['dirs']['0'][0] . PHP_EOL;
    echo ($testing['dirs']['0'][0] === 'is folder' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на читаемость:' . PHP_EOL;
    echo 'Ожидание: ' . 'is readable: true' . PHP_EOL;
    echo 'Реальность: ' . $testing['dirs']['0'][1].PHP_EOL;
    echo ($testing['dirs']['0'][1] === 'is readable: true' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на изменяемость: ' . PHP_EOL;
    echo 'Ожидание: ' . 'is writable: true' . PHP_EOL;
    echo 'Реальность: ' . $testing['dirs']['0'][2] . PHP_EOL;
    echo ($testing['dirs']['0'][2] === 'is writable: true' ? 'passed' : 'failed') . PHP_EOL;
    echo '----------';
    echo PHP_EOL;

    echo 'ПРОВЕРКА ФАЙЛОВ' . PHP_EOL;

    echo 'Название файла: testFile(noWritable)'.PHP_EOL;
    echo 'Проверка на файл'.PHP_EOL;
    echo 'Ожидание: ' . 'is file' . PHP_EOL;
    echo 'Реальность: '. $testing['files']['testFile(noWritable)'][0].PHP_EOL;
    echo ($testing['files']['testFile(noWritable)'][0] === 'is file' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на читаемость: ' . PHP_EOL;
    echo 'Ожидание: ' . 'is readable: true' . PHP_EOL;
    echo 'Реальность: '. $testing['files']['testFile(noWritable)'][1].PHP_EOL;
    echo ($testing['files']['testFile(noWritable)'][1] === 'is readable: true' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на изменяемость: ' . PHP_EOL;
    echo 'Ожидание: ' . 'is writable: false' . PHP_EOL;
    echo 'Реальность: '. $testing['files']['testFile(noWritable)'][2] . PHP_EOL;
    echo ($testing['files']['testFile(noWritable)'][2] === 'is writable: false' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Размер файла:' . PHP_EOL;
    echo 'Ожидание: ' . '2' . PHP_EOL;
    echo 'Реальность: '. $testing['files']['testFile(noWritable)'][3] . PHP_EOL;
    echo ($testing['files']['testFile(noWritable)'][3] === 2 ? 'passed' : 'failed') . PHP_EOL;

    echo '----------';
    echo PHP_EOL;

    echo 'Название файла: testFile(inTest).php' . PHP_EOL;
    echo 'Проверка на файл' . PHP_EOL;
    echo 'Ожидание: ' . 'is file' . PHP_EOL;
    echo 'Реальность: ' . $testing['files']['testFile(inTest).php'][0] . PHP_EOL;
    echo ($testing['files']['testFile(inTest).php'][0] === 'is file' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на читаемость: ' . PHP_EOL;
    echo 'Ожидание: ' . 'is readable: true' . PHP_EOL;
    echo 'Реальность: '. $testing['files']['testFile(inTest).php'][1].PHP_EOL;
    echo ($testing['files']['testFile(inTest).php'][1] === 'is readable: true' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на изменяемость:' . PHP_EOL;
    echo 'Ожидание: ' . 'is writable: true' . PHP_EOL;
    echo 'Реальность: ' . $testing['files']['testFile(inTest).php'][2] . PHP_EOL;
    echo ($testing['files']['testFile(inTest).php'][2] === 'is writable: true' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Размер файла:' . PHP_EOL;
    echo 'Ожидание: ' . '17' . PHP_EOL;
    echo 'Реальность: '. $testing['files']['testFile(inTest).php'][3] . PHP_EOL;
    echo ($testing['files']['testFile(inTest).php'][3] === 17 ? 'passed' : 'failed') . PHP_EOL;

    echo '----------';
    echo PHP_EOL;
/*
    echo 'Название файла: testFile(noReadable)' . PHP_EOL;
    echo 'Проверка на файл' . PHP_EOL;
    echo 'Ожидание: ' . 'is file' . PHP_EOL;
    echo 'Реальность: ' . $testing['files']['testFile(noReadable)'][0].PHP_EOL;
    echo ($testing['files']['testFile(noReadable)'][0] === 'is file' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на читаемость:' . PHP_EOL;
    echo 'Ожидание: ' . 'is readable: false' . PHP_EOL;
    echo 'Реальность: ' . $testing['files']['testFile(noReadable)'][1].PHP_EOL;
    echo ($testing['files']['testFile(noReadable)'][1] === 'is readable: false' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Проверка на изменяемость:' . PHP_EOL;
    echo 'Ожидание: ' . 'if writable: true' . PHP_EOL;
    echo 'Реальность: ' . $testing['files']['testFile(noReadable)'][2].PHP_EOL;
    echo ($testing['files']['testFile(noReadable)'][2] === 'is writable: true' ? 'passed' : 'failed') . PHP_EOL;
    echo 'Размер файла:' . PHP_EOL;
    echo 'Ожидание: ' . '2' . PHP_EOL;
    echo 'Реальность: '. $testing['files']['testFile(noReadable)'][3] . PHP_EOL;
    echo ($testing['files']['testFile(noReadable)'][3] === 2 ? 'passed' : 'failed') . PHP_EOL;

    echo '----------';
    echo PHP_EOL;
*/
}