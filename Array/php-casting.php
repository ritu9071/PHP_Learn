<?php
$a = 10;
// $a = true;
$a = (string) $a;
// $a = (boolean) $a;
// $a = (float) $a;

$b = 10;
$b = (string) $b;

$c = 1.1;
$c = (float) $c;

$d = 0;                  // shirf 0 false hoga
$d = (boolean) $d;

$e = 10;
$e = (array) $e;
var_dump($e);
?>