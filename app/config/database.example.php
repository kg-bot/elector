<?php
use Phalcon\Config;

return new Config([
    'database' => [
        // You should edit this according to your database settings and rename this file to database.php
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '',
        'dbname'      => 'test',
        'charset'     => 'utf8',
    ]
]);
