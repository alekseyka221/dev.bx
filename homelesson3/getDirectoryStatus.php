<?php
/*
 * getDirectoryStatus возвращает массив с информацией о всех директориях и файлах
 * лежащих в input
 */

function getDirectoryStatus($input)
{
    if($currentDir = opendir($input))
    {
        $list = ['dirs'=>[],'files'=>[]];
        while (false !== ($element = readdir($currentDir))) {
            if (in_array($element, ['.', '..']))
            {
                continue;
            }
            if (is_dir($input.$element)) {
                $list['dirs'][$element][] = 'is folder';

                if (is_readable($input.$element)) {
                    $list['dirs'][$element][] = 'is readable: true';
                } else {
                    $list['dirs'][$element][] = 'is readable: false';
                }
                if (is_writable($input.$element)) {
                    $list['dirs'][$element][] = 'is writable: true';
                } else {
                    $list['dirs'][$element][] = 'is writable: false';
                }
            }
            if (is_file($input.$element)) {
                $list['files'][$element][] = 'is file';

                if (is_readable($input.$element)) {
                    $list['files'][$element][] = 'is readable: true';
                } else {
                    $list['files'][$element][] = 'is readable: false';
                }
                if (is_writable($input.$element)) {
                    $list['files'][$element][] = 'is writable: true';
                } else {
                    $list['files'][$element][] = 'is writable: false';
                }
                $size = filesize($input.$element);
                $list['files'][$element][] = $size;
            }
        }
        closedir($currentDir);
        return $list;
    }
}