<?php

$router = $di->getRouter();

// Define your routes here
$router->addGet('/login/', 'Index::login');
$router->addGet('/register/', 'Index::register');

$router->addGet('/regions', 'Country::getRegions');
$router->addGet('/cities', 'Regions::getCities');

$router->handle();
