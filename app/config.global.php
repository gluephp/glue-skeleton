<?php

return [

    /**
     * Debugging
     * ------------------------------------------------------------------------
     */
    'debug'     => false,


    /**
     * Logging
     * ------------------------------------------------------------------------
     */
    'monolog'   => [
        'folder'    => __DIR__ . '/storage/logs',
        'file'      => 'app_' . date('Y-m-d') . '.log',
        'level'     => 'error',
    ],


    /**
     * Date & Time
     * ------------------------------------------------------------------------
     */
    'timezone'  => 'UTC',


    /**
     * Service Providers
     * ------------------------------------------------------------------------
     * Logging libraries should be registered first, since other packages might
     * depend on them.
     */
    'providers' => [
        'Glue\Monolog\ServiceProvider',
        'Glue\Whoops\ServiceProvider',
    ],

];