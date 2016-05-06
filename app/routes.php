<?php

$app->router->get(
    ['/', 'home'], 
    ['App\Controllers\HomeController', 'home']
);
