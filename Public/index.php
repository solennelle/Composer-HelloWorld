<?php

require_once __DIR__ . '/../vendor/autoload.php';

use HelloWorld\SayHello;
use App\Wcs\Hello;
echo Hello::talk();
echo SayHello::world();
$Hello = new Hello();
$SayHello = new SayHello();
