<?php

$router->get('/',     [new App\Controllers\SiteController, 'home']);


$router->get('/places', [new App\Controllers\SiteController, 'places']);
