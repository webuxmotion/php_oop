<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);
error_reporting(-1);

use app\{A, B};

require_once __DIR__ . '/vendor/autoload.php';

$a = new A();
$b = new B();

echo $a->getTest() . "<br>";
echo $b->getTest() . "<br>";
$b->do1()->do2();
