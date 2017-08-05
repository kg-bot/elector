<?php
/*
 * Modified: prepend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

$config = new \Phalcon\Config([
    
    'application' => [
        'appDir'         => APP_PATH . '/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir'      => APP_PATH . '/models/',
        'migrationsDir'  => APP_PATH . '/migrations/',
        'viewsDir'       => APP_PATH . '/views/',
        'pluginsDir'     => APP_PATH . '/plugins/',
        'libraryDir'     => APP_PATH . '/library/',
        'cacheDir'       => BASE_PATH . '/cache/',
        'avatarsDir'     => BASE_PATH . '/public/assets/avatars/',

        'formsDir'       => APP_PATH . '/Forms/',

        /** Defines if this is development or production */
        'environment'   => 'development',

        // This allows the baseUri to be understand project paths that are not in the root directory
        // of the webpspace.  This will break if the public/index.php entry point is moved or
        // possibly if the web server rewrite rules are changed. This can also be set to a static path.
        'baseUri'        => '/',
        'app_name'       => 'Elector',

        // We set this because they are used in lots of places, if we need to modify them we have central place right here
        'urls' => [
            'login'     => '/login',
            'register'  => '/register'
        ],
    ]
]);

$config_kairo = require __DIR__ . '/kairo.php';
$config_database = require __DIR__ . '/database.php';

$config->merge($config_kairo);
$config->merge($config_database);

return $config;