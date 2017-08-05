<?php
use Phalcon\Di\FactoryDefault;

error_reporting(E_ALL);
ini_set('display_errors', 0);

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');

require __DIR__ . '/../vendor/autoload.php';
    /**
     * The FactoryDefault Dependency Injector automatically registers
     * the services that provide a full stack framework.
     */
    $di = new FactoryDefault();

    /**
     * Handle routes
     */
    include APP_PATH . '/config/router.php';

    /**
     * Read services
     */
    include APP_PATH . '/config/services.php';

    /**
     * Get config service for use in inline setup below
     */
    $config = $di->getConfig();

    /**
     * Include Autoloader
     */
    include APP_PATH . '/config/loader.php';

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    // We need to set up error reporting if we're in dev phase
    if($config->application->environment === 'development') {
        ini_set('display_errors', 1);
        ini_set('displaystartuperrors', 1);
        $listener = new \Phalcon\Debug();
        $listener->listen(true, true);

    }

    echo str_replace(["\n","\r","\t"], '', $application->handle()->getContent());
