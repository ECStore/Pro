<?php

return array (
  'name' => 'ecstore/framework',
  'license' => 'MIT',
  'version' => 'v1.0.1.5',
  'require' => 
  array (
    'ecstore/base' => '~2.0',
    'ecstore/dev' => '~2.0',
    'ecstore/admin' => '~2.0',
    'ecstore/install' => '~2.0',
    'ecstore/home' => '~2.0',
    'ecstore/bootstrap' => '~2.0',
    'zoujingli/wechat-php-sdk' => '>=1.3.10',
    'cardinity/cardinity-sdk-php' => '^1.0',
    'barryvdh/laravel-ide-helper' => '~2.4',
    'braintree/braintree_php' => '3.2.0',
    'leafo/scssphp' => '0.0.12',
    'nwidart/laravel-modules' => '~2.0',
    'composer/composer' => '~1.5',
    'oomphinc/composer-installers-extender' => '^1.0',
    'cloudshop/composer-merge-plugin' => '~1.0',
    'johnpbloch/wordpress-core' => '4.7.*',
    'divido/divido-php' => '>=1.1.1',
    'klarna/kco_rest' => '^2.2',
    'cartalyst/sentinel' => '~2.0',
  ),
  'config' => 
  array (
    'sort-packages' => true,
    'optimize-autoloader' => true,
  ),
  'minimum-stability' => 'dev',
  'prefer-stable' => true,
)
;