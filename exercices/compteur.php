<?php
$f = file_get_contents($argv[1]);
$a = strlen($f);

$e = [];

for ($i = 0; $i < $a; $i++) {
    $c = $f[$i];
    if ($c != "\n" && $c != " ") {
        array_key_exists($c, $e) ? $e[$c]++ : $e[$c] = 1;
    }
}

var_dump($e);
echo count($e) . '-' . $a;
