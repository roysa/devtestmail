<?php

require __DIR__ . '/env.php';

return array(
    
    // application base path
    'basePath'=> realpath(__DIR__ . '/../'),
 
    // application name
    'name'=>'DevTestMail',
    
    'theme' => 'material',
 
    'aliases'=>array(
    ),
 
    // default controller that will be executed when running the application
    'defaultController'=>'site', 
 
    // user language (for Locale)
    'language' => 'en',
 
    //language for messages and views
    'sourceLanguage'=>'en',
 
    // charset to use
    'charset' => 'utf-8',
 
    // preloading application components
    'preload' => array('log'),
 
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
 
        // logging
        'log'=>array(
            // class of logger
            'class'=>'CLogRouter', 
            // where to store logs?
            'routes'=>array( 
                array(
                    // store on file, other options are available
                    'class'=>'CFileLogRoute', 
                    // what to store on file? error and warning, info and trace can be added here
                    'levels'=>'error, warning', 
                ),
            ),
        ),
 
        // user
        'user'=>array(
            'allowAutoLogin' => true,
            'loginUrl' => array('site/login'),
            'class' => 'WebUser',
        ),
 
        // database
        'db'=>require(__DIR__.'/db.' . APP_ENV . '.php'),
        
        // url 
        'urlManager'=>array(
            'urlFormat'=>'path',
            'showScriptName' => false,
            'rules' => require (__DIR__) . '/urls.php',
        ),
        
    ),
);
