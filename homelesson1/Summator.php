<?php
/*
 * Необходимо считать из консоли произвольное
 * кол-во чисел от пользователя, сложить их и вывести результат.
 */

require ("ReadFromConsole.php");

$array = [];
$array = readFromConsole();
$sum = array_sum($array);
exit("Сумма всех введенных значений = $sum");