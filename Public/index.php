<?php

require_once __DIR__ . '/../vendor/autoload.php';

use HelloWorld\SayHello;
use App\Wcs\Hello;
echo SayHello::world();
echo Hello::talk();
