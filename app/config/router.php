<?php

$router = $di->getRouter();

// Define your routes here
$router->addGet('/login', 'Index::login');
$router->addGet('/register', 'Index::register');

$router->addGet('/regions', 'Country::getRegions');
$router->addGet('/cities', 'Regions::getCities');

/** Here we validate if email is already taken */
$router->addPost('/validate/email', 'Validate::email');
// Here we try to register new user
$router->addPost('/register', 'Index::register');

$router->handle();
