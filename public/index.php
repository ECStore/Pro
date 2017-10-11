<?php

use App\Bootstrap;
use App\Home\Start;

require __DIR__ . "/../storage/vendor/autoload.php";
$app = Bootstrap::application();

if (is_file($file = $app->make(Start::class)->handle())) {
    require $file;
}