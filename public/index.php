<?php

$yii = __DIR__ . '/../vendor/yiisoft/yii/framework/yiilite.php';
require_once($yii);
$config = require __DIR__ . '/../protected/config/web.php';
defined('YII_DEBUG') or define('YII_DEBUG', true);
Yii::createWebApplication($config)->run();