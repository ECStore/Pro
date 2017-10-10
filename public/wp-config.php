<?php

use App\Bootstrap\Bootstrap;

require __DIR__ . "/../storage/vendor/autoload.php";
$app = Bootstrap::application();

if (is_file($app->configFile = $app->make(App\Home\Home::class)->config())) {
    require_once $app->configFile;
}

