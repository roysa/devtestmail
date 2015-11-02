<?php

require __DIR__ . '/env.php';

return array(
    
    // application base path
    'basePath'=> realpath(__DIR__ . '/../'),
 
    // application name
    'name'=>'DevTestMail',
 
    'aliases'=>array(
    ),
 
    // user language (for Locale)
    'language' => 'en',
 
    //language for messages and views
    'sourceLanguage'=>'en',
 
    // charset to use
    'charset' => 'utf-8',
 
    // autoloading classes
    'import'=>array(
        'application.models.*',
        'application.components.*',
    ),
 
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'=>require(__DIR__ . '/params.php'),

    // configuration of application components
    'components' => array(
 
        // database
        'db' => require(__DIR__.'/db.' . APP_ENV . '.php'),
        
    ),
);
