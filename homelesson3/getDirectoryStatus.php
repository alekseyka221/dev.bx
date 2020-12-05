<?php
/*
 * getDirectoryStatus возвращает массив с информацией о всех директориях и файлах
 * лежащих в input
 */

function getDirectoryStatus($input): array
{
    if($currentDir = opendir($input))
    {
        $list = [
        	'dirs'=>[],
			'files'=>[]
		];
        while (false !== ($element = readdir($currentDir)))
		{
            if (in_array($element, ['.', '..']))
            {
                continue;
            }
            if (is_dir($input.$element))
            {
				$list['dirs'][$element]['is_readable'] =
					(is_readable($input.$element) == true ? 'true' : 'false');
				$list['dirs'][$element]['is_writable'] =
					(is_writable($input.$element) == true ? 'true' : 'false');
            }
            if (is_file($input.$element))
            {
				$list['files'][$element]['is_readable'] =
					(is_readable($input.$element) == true ? 'true' : 'false');
				$list['files'][$element]['is_writeable'] =
					(is_writeable($input.$element) == true ? 'true' : 'false');
				$list['files'][$element]['filesize'] = filesize($input.$element);
            }
        }
        closedir($currentDir);
        return $list;
    }
    else
	{
		echo 'Введен неверный путь до директории';
	}
}