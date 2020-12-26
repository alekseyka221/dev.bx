<?php
require_once 'getDirectoryStatus.php';
require_once 'automaticTest.php';
echo 'Введите относительный путь от директории с данным файлом,'.PHP_EOL.
'либо абсолютный путь, чтобы проанализировать требуемую директорию'.PHP_EOL.
'или введите test для тестирования программы:'.PHP_EOL;
$input = trim(fgets(STDIN));
if($input == 'test')
{
    test();
}
else
{
      $result = getDirectoryStatus($input);
      print_r($result);
}