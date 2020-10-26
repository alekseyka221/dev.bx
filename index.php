<?php
$a = 45;
$b = 6;

$c = test($a, $b);
 echo $c;

function test($a, $b) {
    $c = $a + $b;
    return $c;
}

date_default_timezone_set('UTC');
$array = getdate();
print_r($array);

$simple = [
    1, 2, 3, 4,
    5 => "haha"
];

echo("<br/><br/><br/><br/><br/><br/>".$simple[5]);
echo("<br/>");
echo("Hello Git!!!");