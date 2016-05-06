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
 * Load configuration files
 */
$app->config->load([
    __DIR__ . '/app/config.global.php',
    __DIR__ . '/app/config.local.php',
]);


/**
 * Set timezone
 */
date_default_timezone_get(
    $app->config->get('timezone', 'UTC')
);


/**
 * Register Service Providers
 */
if (is_array($app->config->get('providers'))) {
    foreach($app->config->get('providers') as $provider) {
        $app->register($app->make($provider));
        unset($provider); // clean up
    }
}


/**
 * load routes
 */
include __DIR__ . '/app/routes.php';


/**
 * Return the app instance
 */
return $app;