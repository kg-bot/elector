<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->avatarsDir,
        $config->application->formsDir,
    ]
)->register();

/**
 * We need to register some classes to be available everywhere
 */
$loader->registerClasses([
    'Helpers'   => __DIR__ . '/../Helpers/Helpers.php'
])->register();
