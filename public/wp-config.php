<?php

use App\Bootstrap;
use Home\Start;

require __DIR__ . "/../storage/vendor/autoload.php";
$app = Bootstrap::application();

if (is_file($app->configFile = $app->make(Start::class)->config())) {
    require_once $app->configFile;
}

