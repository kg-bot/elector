<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

use Doctrine\DBAL\DriverManager;

$paths = array(__DIR__ . "/../models/");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'host'     => '127.0.0.1',
    'driver'   => 'pdo_mysql',
    'user'     => 'test',
    'password' => '',
    'dbname'   => 'test',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

// This is configuration for DBAL part of Doctrine
$dbalConfig = new Doctrine\DBAL\Configuration();

$dbalConnection = DriverManager::getConnection($dbParams, $dbalConfig);