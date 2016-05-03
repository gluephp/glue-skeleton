<?php
/**
 * Include Composers autoloader
 */
include __DIR__ . '/vendor/autoload.php';


/**
 * Boot the application
 */
$app = new Glue\App;


/**
 * Example route
 */
$app->config->load([
    __DIR__ . '/app/config.global.php',
    __DIR__ . '/app/config.local.php',
]);


/**
 * Example route
 */
$app->router->get('/', 
    ['App\Controllers\HomeController', 'home']
);


return $app;