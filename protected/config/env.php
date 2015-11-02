<?php

$fn = __DIR__ . '/env.txt';
$env = (file_exists($fn)) ? trim(file_get_contents($fn)) : 'production';
define('APP_ENV', $env);