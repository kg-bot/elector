<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require __DIR__ . '/app/config/doctrine.php';

return ConsoleRunner::createHelperSet($entityManager);