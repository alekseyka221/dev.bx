<?php
//Файл с функцией, работающей с консолью

function readFromConsole()
{
    $array = array();
    $continue = "y";

    while (true)
    {
        switch ($continue)
        {
            case "y" :
                echo "Введите число: ";
                $input = trim(fgets(STDIN));
                if (is_numeric($input)) {
                    array_push($array, $input);
                } else {
                    echo "Введенное значение не является числом" . PHP_EOL;
                }
                echo "Продолжать вводить? y/n" . PHP_EOL;
                $continue = trim(fgets(STDIN));
                break;
            case "n":
                return $array;
            default:
                echo "Введенное значение не y/n" . PHP_EOL;
                echo "Продолжать вводить? y/n" . PHP_EOL;
                $continue = trim(fgets(STDIN));
                break;

        }

    }
}
